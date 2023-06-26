<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [1, 1, 1, 'MacBook Pro', 1999.99, 'Powerful laptop for professionals', '16-inch Retina display, M1 Pro chip, up to 64GB memory', 'https://phone-ecommerce-api-production.up.railway.app//api/images/1.avif', null, null],
            [2, 2, 1, 'Galaxy Book Pro 360', 1199.99, 'Thin and light 2-in-1 laptop', '13.3-inch Super AMOLED display, Intel Core i7, 16GB memory', 'https://phone-ecommerce-api-production.up.railway.app//api/images/2.avif', null, null],
            [3, 3, 2, 'Inspiron Desktop', 499.99, 'Budget desktop for home use', '10th Gen Intel Core i5, 8GB memory, 512GB SSD', 'https://phone-ecommerce-api-production.up.railway.app//api/images/3.avif', null, null],
            [4, 4, 5, 'Pavilion Gaming Desktop', 799.99, 'Desktop for gaming enthusiasts', 'AMD Ryzen 5, NVIDIA GeForce GTX 1650 graphics, 8GB memory', 'https://phone-ecommerce-api-production.up.railway.app//api/images/4.avif', null, null],
            [5, 5, 1, 'Surface Laptop 4', 999.99, 'Sleek laptop for productivity', '13.5-inch PixelSense display, Intel Core i5, up to 16GB memory', 'https://phone-ecommerce-api-production.up.railway.app//api/images/5.avif', null, null],
            [6, 6, 1, 'ThinkPad X1 Carbon', 1599.99, 'Business laptop for professionals', '14-inch FHD display, 11th Gen Intel Core i7, 16GB memory', 'https://phone-ecommerce-api-production.up.railway.app//api/images/6.avif', null, null],
            [7, 12, 9, 'GeForce RTX 3080', 699.99, 'Powerful graphics card for gaming', '10GB GDDR6X memory, NVIDIA Ampere architecture', 'https://phone-ecommerce-api-production.up.railway.app//api/images/7.avif', null, null],
            [8, 4, 8, 'OfficeJet Pro 9025e', 329.99, 'All-in-one printer for small businesses', 'Wireless printing, scanning, copying, and faxing', 'https://phone-ecommerce-api-production.up.railway.app//api/images/8.avif', null, null],
            [9, 9, 9, 'Samsung 970 EVO Plus 1TB', 179.99, 'NVMe SSD for high-speed data transfer', 'Sequential read/write speeds up to 3500/3300 MB/s', 'https://phone-ecommerce-api-production.up.railway.app//api/images/9.avif', null, null],
            [10, 10, 10, 'Bose QuietComfort 35 II', 329.99, 'Wireless noise-cancelling headphones', '20-hour battery life, Google Assistant and Amazon Alexa built-in', 'https://phone-ecommerce-api-production.up.railway.app//api/images/10.avif', null, null],
            [11, 2, 1, 'Galaxy Book S', 799.99, 'Thin and light laptop for on-the-go', '13.3-inch FHD display, Qualcomm Snapdragon 8cx, up to 8GB memory', 'https://phone-ecommerce-api-production.up.railway.app//api/images/11.avif', null, null],
            [12, 3, 1, 'Dell XPS 13', 1299.99, 'Premium laptop for professionals', '13.4-inch FHD display, 11th Gen Intel Core i7, up to 16GB memory', 'https://phone-ecommerce-api-production.up.railway.app//api/images/12.avif', null, null],
            [13, 5, 3, 'Surface Duo 2', 1499.99, 'Foldable smartphone for productivity', 'Dual 5.8-inch AMOLED displays, Qualcomm Snapdragon 888, 8GB memory', 'https://phone-ecommerce-api-production.up.railway.app//api/images/13.avif', null, null],
            [14, 3, 6, 'Dell UltraSharp U2720Q', 559.99, '27-inch 4K monitor for content creators', '99% sRGB color gamut, USB-C and HDMI ports', 'https://phone-ecommerce-api-production.up.railway.app//api/images/14.avif', null, null],
            [15, 4, 8, 'LaserJet Pro M203dw', 169.99, 'Monochrome laser printer for small businesses', 'Wireless printing, up to 28 pages per minute', 'https://phone-ecommerce-api-production.up.railway.app//api/images/15.avif', null, null],
            [16, 9, 9, 'Crucial Ballistix 16GB DDR4 RAM', 89.99, 'High-performance memory for gaming and content creation', '3200 MHz, low profile heat spreader', 'https://phone-ecommerce-api-production.up.railway.app//api/images/16.avif', null, null],
            [17, 10, 10, 'Sony WH-1000XM4', 349.99, 'Wireless noise-cancelling headphones', '30-hour battery life, LDAC and DSEE Extreme audio upscaling', 'https://phone-ecommerce-api-production.up.railway.app//api/images/17.avif', null, null],
            [18, 1, 3, 'iPhone 13 Pro', 999.99, 'Premium smartphone for photography and videography', '6.1-inch Super Retina XDR display, A15 Bionic chip, 5G', 'https://phone-ecommerce-api-production.up.railway.app//api/images/18.avif', null, null],
            [19, 2, 3, 'Galaxy Z Fold 3', 1799.99, 'Foldable smartphone for multitasking', '7.6-inch foldable Dynamic AMOLED display, Qualcomm Snapdragon 888, 12GB memory', 'https://phone-ecommerce-api-production.up.railway.app//api/images/19.avif', null, null],
            [20, 3, 6, 'Dell UltraSharp U2419H', 209.99, '24-inch monitor for productivity', 'FHD display, USB-C and HDMI ports', 'https://phone-ecommerce-api-production.up.railway.app//api/images/20.avif', null, null],
            [21, 4, 1, 'HP Spectre x360', 1399.99, 'Premium 2-in-1 laptop', '13.5-inch OLED display, 11th Gen Intel Core i7, up to 16GB memory', 'https://phone-ecommerce-api-production.up.railway.app//api/images/21.avif', null, null],
            [22, 5, 1, 'Surface Laptop Go', 549.99, 'Affordable laptop for everyday use', '12.4-inch PixelSense display, Intel Core i5, up to 8GB memory', 'https://phone-ecommerce-api-production.up.railway.app//api/images/22.avif', null, null],
            [23, 6, 1, 'IdeaPad 3', 449.99, 'Budget laptop for students', '15.6-inch FHD display, AMD Ryzen 3, 8GB memory', 'https://phone-ecommerce-api-production.up.railway.app//api/images/23.avif', null, null],
            [24, 12, 9, 'GeForce RTX 3090', 1499.99, 'High-end graphics card for gaming and content creation', '24GB GDDR6X memory, NVIDIA Ampere architecture', 'https://phone-ecommerce-api-production.up.railway.app//api/images/24.avif', null, null],
            [25, 4, 8, 'Color LaserJet Pro MFP M477fdw', 599.99, 'Color laser printer for small businesses', 'Wireless printing, scanning, copying, and faxing', 'https://phone-ecommerce-api-production.up.railway.app//api/images/25.avif', null, null],
            [26, 9, 9, 'Sabrent Rocket 1TB NVMe SSD', 149.99, 'High-speed storage for gaming and content creation', 'Sequential read/write speeds up to 5000/4400 MB/s', 'https://phone-ecommerce-api-production.up.railway.app//api/images/26.avif', null, null],
            [27, 10, 10, 'Sennheiser Momentum True Wireless 2', 299.99, 'Wireless earbuds for audiophiles', '7-hour battery life, active noise cancellation, aptX codec support', 'https://phone-ecommerce-api-production.up.railway.app//api/images/27.avif', null, null],
            [28, 1, 1, 'MacBook Air', 999.99, 'Thin and light laptop for everyday use', '13.3-inch Retina display, M1 chip, up to 16GB memory', 'https://phone-ecommerce-api-production.up.railway.app//api/images/28.avif', null, null],
            [29, 2, 3, 'Galaxy S21 Ultra', 1199.99, 'Premium smartphone for photography and videography', '6.8-inch Dynamic AMOLED display, Qualcomm Snapdragon 888, 12GB memory', 'https://phone-ecommerce-api-production.up.railway.app//api/images/29.avif', null, null],
            [30, 3, 1, 'Dell G5 15', 1099.99, 'Gaming laptop for enthusiasts', '15.6-inch FHD display, AMD Ryzen 7, NVIDIA GeForce RTX 3060 graphics, 16GB memory', 'https://phone-ecommerce-api-production.up.railway.app//api/images/30.avif', null, null],
            [31, 4, 1, 'Envy Laptop', 899.99, 'Premium laptop for professionals', '15.6-inch FHD display, 11th Gen Intel Core i7, NVIDIA GeForce GTX 1650 graphics, 16GB memory', 'https://phone-ecommerce-api-production.up.railway.app//api/images/31.avif', null, null],
            [32, 2, 7, 'Samsung T7 Portable SSD', 169.99, 'Portable storage for on-the-go', '1TB capacity, USB 3.2 Gen 2 interface, up to 1050 MB/s transfer speed', 'https://phone-ecommerce-api-production.up.railway.app//api/images/32.avif', null, null],
            [33, 6, 1, 'ThinkPad X1 Yoga', 1849.99, 'Premium 2-in-1 laptop for professionals', '14-inch FHD display, 11th Gen Intel Core i7, up to 16GB memory', 'https://phone-ecommerce-api-production.up.railway.app//api/images/33.avif', null, null],
            [34, 12, 9, 'GeForce RTX 3070', 599.99, 'Mid-range graphics card for gaming and content creation', '8GB GDDR6 memory, NVIDIA Ampere architecture', 'https://phone-ecommerce-api-production.up.railway.app//api/images/34.avif', null, null],
            [35, 4, 8, 'DeskJet Plus 4155', 129.99, 'All-in-one printer for home use', 'Wireless printing, scanning, and copying, up to 8.5 pages per minute', 'https://phone-ecommerce-api-production.up.railway.app//api/images/35.avif', null, null],
            [36, 9, 9, 'Corsair Vengeance LPX 16GB DDR4 RAM', 79.99, 'High-speed memory for gaming and content creation', '3200 MHz, low profile heat spreader', 'https://phone-ecommerce-api-production.up.railway.app//api/images/36.avif', null, null],
            [37, 10, 10, 'Jabra Elite 85t', 229.99, 'True wireless earbuds with adjustable noise cancellation', '7-hour battery life, wireless charging case, advanced call quality', 'https://phone-ecommerce-api-production.up.railway.app//api/images/37.avif', null, null],
            [38, 1, 3, 'iPhone 13', 799.99, 'Latest smartphone from Apple', '6.1-inch Super Retina XDR display, A15 Bionic chip, 5G', 'https://phone-ecommerce-api-production.up.railway.app//api/images/38.avif', null, null],
            [39, 2, 3, 'Galaxy Note 20 Ultra', 1299.99, 'Premium smartphone with S Pen', '6.9-inch Dynamic AMOLED display, Qualcomm Snapdragon 865+, 12GB memory', 'https://phone-ecommerce-api-production.up.railway.app//api/images/39.avif', null, null],
            [40, 3, 6, 'Dell P2419H', 189.99, '24-inch monitor for business use', 'FHD display, USB-C and HDMI ports, adjustable stand', 'https://phone-ecommerce-api-production.up.railway.app//api/images/40.avif', null, null],
            [41, 4, 1, 'HP EliteBook x360', 1799.99, 'Premium 2-in-1 laptop for professionals', '13.3-inch FHD display, 11th Gen Intel Core i7, up to 32GB memory', 'https://phone-ecommerce-api-production.up.railway.app//api/images/41.avif', null, null],
            [42, 11, 9, 'AMD Ryzen 9 5900X', 629.99, 'High-performance processor for gaming and content creation', '12 cores, 24 threads, 3.7 GHz base clock speed, 105W TDP', 'https://phone-ecommerce-api-production.up.railway.app//api/images/42.avif', null, null],
            [43, 11, 9, 'AMD Radeon RX 6600 XT', 459.99, 'Mid-range graphics card for gaming and content creation', '8GB GDDR6 memory, AMD RDNA 2 architecture', 'https://phone-ecommerce-api-production.up.railway.app//api/images/43.avif', null, null],
            [44, 11, 9, 'AMD Ryzen Threadripper 3990X', 3999.99, 'High-end desktop processor for demanding workloads', '64 cores, 128 threads, 2.9 GHz base clock speed, 280W TDP', 'https://phone-ecommerce-api-production.up.railway.app//api/images/44.avif', null, null],
            [45, 5, 5, 'Alienware Aurora R12', 2099.99, 'Powerful gaming desktop', '11th Gen Intel Core i7, NVIDIA GeForce RTX 3070 graphics, up to 64GB memory', 'https://phone-ecommerce-api-production.up.railway.app//api/images/45.avif', null, null],
            [46, 7, 5, 'ROG Strix GA15', 2199.99, 'Gaming desktop with a unique design', 'AMD Ryzen 9 5900X, NVIDIA GeForce RTX 3080 graphics, up to 32GB memory', 'https://phone-ecommerce-api-production.up.railway.app//api/images/46.avif', null, null],
            [47, 6, 2, 'ThinkCentre M920 Tiny', 699.99, 'Small form factor desktop for business use', '8th Gen Intel Core i7, up to 16GB memory, multiple mounting options', 'https://phone-ecommerce-api-production.up.railway.app//api/images/47.avif', null, null],
            [48, 4, 2, 'HP EliteDesk 800 G6 Tower PC', 1299.99, 'Powerful desktop for business use', '11th Gen Intel Core i7, up to 64GB memory, multiple expansion options', 'https://phone-ecommerce-api-production.up.railway.app//api/images/48.avif', null, null],
            [49, 5, 2, 'Surface Studio 2', 3499.99, 'All-in-one desktop for creative professionals', '28-inch PixelSense display, 7th Gen Intel Core i7, NVIDIA GeForce GTX 1070 graphics, up to 32GB memory', 'https://phone-ecommerce-api-production.up.railway.app//api/images/49.avif', null, null],
            [50, 7, 5, 'ROG Strix GA15DK', 1599.99, 'Gaming desktop with a compact design', 'AMD Ryzen 7 5800X, NVIDIA GeForce RTX 3070 graphics, up to 32GB memory', 'https://phone-ecommerce-api-production.up.railway.app//api/images/50.avif', null, null],
            [51, 1, 7, 'Magic Keyboard', 99.99, 'Wireless keyboard for Mac computers', 'Scissor mechanism, numeric keypad, rechargeable battery', 'https://phone-ecommerce-api-production.up.railway.app//api/images/51.avif', null, null],
            [52, 3, 7, 'Dell UltraSharp Webcam', 199.99, '4K webcam for video conferencing and content creation', '2160p resolution, 3D/depth sensing, Windows Hello facial recognition', 'https://phone-ecommerce-api-production.up.railway.app//api/images/52.avif', null, null],
            [53, 6, 7, 'Yoga Webcam Privacy Shutter', 29.99, 'HD webcam for Yoga laptops with privacy shutter', '720p resolution, privacy shutter to block camera when not in use', 'https://phone-ecommerce-api-production.up.railway.app//api/images/53.avif', null, null],
            [54, 8, 7, 'Acer Predator Cestus 330', 79.99, 'Gaming mouse with customizable buttons and RGB lighting', '16000 DPI optical sensor, Omron switches, 16.8 million color options', 'https://phone-ecommerce-api-production.up.railway.app//api/images/54.avif', null, null],
            [55, 1, 4, 'iPad Air', 599.99, 'Powerful and lightweight tablet from Apple', '10.9-inch Liquid Retina display, A14 Bionic chip, up to 256GB storage, Touch ID', 'https://phone-ecommerce-api-production.up.railway.app//api/images/55.avif', null, null],
            [56, 6, 4, 'Yoga Tab 13', 679.99, 'Versatile tablet with built-in kickstand and projector', '13-inch 2K display, Snapdragon 870 processor, up to 8GB memory, up to 256GB storage', 'https://phone-ecommerce-api-production.up.railway.app//api/images/56.avif', null, null],
            [57, 2, 4, 'Galaxy Tab S7', 649.99, 'Android tablet with S Pen and 120Hz display', '11-inch LTPS display, Snapdragon 865+ processor, up to 8GB memory, up to 512GB storage', 'https://phone-ecommerce-api-production.up.railway.app//api/images/57.avif', null, null],
            [58, 5, 4, 'Surface Pro 7', 899.99, 'Windows tablet with detachable keyboard and kickstand', '12.3-inch PixelSense display, 10th Gen Intel Core processors, up to 16GB memory, up to 1TB storage', 'https://phone-ecommerce-api-production.up.railway.app//api/images/58.avif', null, null],
            [59, 9, 4, 'Xperia 1 III', 1199.99, 'Multimedia tablet with 21:9 aspect ratio display', '6.5-inch OLED display, Snapdragon 888 processor, up to 12GB memory, up to 256GB storage', 'https://phone-ecommerce-api-production.up.railway.app//api/images/59.avif', null, null],
            [60, 4, 4, 'HP ElitePad 1000 G2', 799.99, 'Business tablet with durable design and optional dock', '10.1-inch Gorilla Glass display, Intel Atom processor, up to 4GB memory, up to 128GB storage', 'https://phone-ecommerce-api-production.up.railway.app//api/images/60.avif', null, null]
        ];

        foreach ($products as $product) {
            DB::table('products')->insert([
                'id' => $product[0],
                'brand_id' => $product[1],
                'product_type_id' => $product[2],
                'name' => $product[3],
                'price' => $product[4],
                'description' => $product[5],
                'specifications' => $product[6],
                'imageUrl' => $product[7],
                'created_at' => $product[8],
                'updated_at' => $product[9]
            ]);
        }
    }
}
