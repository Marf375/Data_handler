<?php

namespace App\Console\Commands;

use App\Models\orders;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class FetchOrderData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'wb:fetchOrders {dateFrom} {dateTo}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Загружает заказы из WB APIn';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $dateFrom = $this->argument('dateFrom');
        $dateTo = $this->argument('dateTo');
        $token = 'E6kUTYrYwZq2tN4QEtyzsbEBk3ie';
        $url = 'http://109.73.206.144:6969/api/orders';
        $page = 1;
        $limit = 500;
        while (true) {
            $response = Http::get($url, [
                'dateFrom' => $dateFrom,
                'dateTo' => $dateTo,
                'page' => $page,
                'limit' => $limit,
                'key' => $token,
            ]);

            if (!$response->ok()) {
                $this->error("Ошибка при запросе страницы $page");
                return 1;
            }

            $data = $response->json();

            if (empty($data['data'])) {
                $this->info("Данные закончились, остановка.");
                break;
            }
            foreach ($data['data'] as $item) {
                $insertData = $item;
                orders::updateOrCreate(
                    $insertData
                );
            }
            if (count($data['data']) < $limit) {
                $this->info("Все данные загружены.");
                break;
            }

            $page++;
        }
    }
}
