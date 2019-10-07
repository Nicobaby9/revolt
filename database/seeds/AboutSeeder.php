<?php

use App\AboutCompany;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $about = new AboutCompany;

        $about->company_profile = 'Kami telah melayani kebutuhan konsumen Kaos dan Kemeja di Indonesia sejak tahun 2013. Produk konveksi yang dipesan akan kami produksi sesuai dengan permintaan dan kebutuhan Anda. Pesanan Anda akan dikerjakan secara profesional oleh para tenaga kerja berpengalaman. Semoga Anda berkenan menjalin kerja sama dengan kami.';
        $about->atOurServices_first_title = 'Garment Industry';
        $about->atOurServices_first_desc = 'Our company are always following fashion update and trends.';
        $about->atOurServices_second_title = 'Save Your Money';
        $about->atOurServices_second_desc = 'You can make an order with low price but have good quality.';
        $about->atOurServices_third_title = 'Easy Design';
        $about->atOurServices_third_desc = 'You can this design as is, or you can make changes!';
        $about->atOurServices_fourth_title = 'Made With Love';
        $about->atOurServices_fourth_desc = 'We always made the product with love.';
        $about->contact_us_wa_link = 'https://wa.me/+6282136633826/?text=urlencodedtext';
        $about->contact_us_instagram_link = 'http://www.instagram.com/rvlt_factory.print';

        $about->save();
    }
}
