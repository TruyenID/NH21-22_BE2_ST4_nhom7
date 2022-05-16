<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\QueryException ;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //type1 phone
        DB::table('products')->insert([
            'id' => 1,
            'name' => 'iPhone 12 Pro Max 512GB',
            'manu_id' =>2,
            'type_id' =>1,
            'price' =>34090000,
            'image'=> 'iphone-12-pro-max-512gb-xanh-duong-1-org.jpg',
            'description' =>  '      
            Cấu hình Điện thoại iPhone 12 Pro Max 512GB
            Màn hình:OLED6.7"Super Retina XDR
            Hệ điều hành: iOS 15
            Camera sau: 3 camera 12 MP
            Camera trước:12 MP
            Chip: Apple A14 Bionic
            RAM: 6 GB
            Bộ nhớ trong: 512 GB
            SIM:1 Nano SIM & 1 eSIMHỗ trợ 5G
            Pin, Sạc:3687 mAh20 W ',
            'feature' => 1,
        ]);
        DB::table('products')->insert([
            'id' => 8,
            'name' => 'Samsung Galaxy Z Fold3 5G',
            'manu_id' =>1,
            'type_id' =>1,
            'price' =>36990000,
            'image'=> 'samsung-galaxy-z-fold3-5g-1.jpg',
            'description' =>  '      
            Cấu hình Điện thoại Samsung Galaxy Z Fold3 5G 256GB
            Màn hình:Chính: 7.6 inch, 
            Hệ điều hành: android 11
            Camera sau: 12.0 MP + 12.0 MP + 12.0 MP
            Camera trước:10.0 MP
            RAM: 12 GB
            Bộ nhớ trong: 256 GB
            SIM:2 - 2 Nano SIM hoặc 1 eSIM, 1 Nano SIM
            Dung lượng Pin:4400 mAh ',
            'feature' => 1,
        ]);
        DB::table('products')->insert([
            'id' => 3,
            'name' => 'Xiaomi Mi 11 5G',
            'manu_id' =>3,
            'type_id' =>1,
            'price' =>21990000,
            'image'=> 'xiaomi-mi-11-lite-4g-blue-600x600.jpg',
            'description' =>  '      
            Cấu hình Điện thoại Xiaomi Mi 11 5G
            Màn hình:AMOLED6.81"Quad HD+ (2K+) 
            Hệ điều hành: android 11
            Camera sau: Chính 108 MP & Phụ 13 MP, 5 MP
            Camera trước: 20 MP
            RAM: 8 GB
            Chip: Snapdragon 888
            Bộ nhớ trong: 256 GB
            SIM:2 Nano SIMHỗ trợ 5G
            Pin, Sạc: 4600mAh, 55W ',
            'feature' => 2,
        ]);
        DB::table('products')->insert([
            'id' => 4,
            'name' => 'Vivo X70 Pro 5G',
            'manu_id' =>6,
            'type_id' =>1,
            'price' =>19990000,
            'image'=> 'vivo-x70-pro-xanh-hong-1-600x600.jpg',
            'description' =>  '      
            Cấu hình Điện thoại Vivo X70 Pro 5G
            Màn hình:AMOLED6.56"Full HD+
            Hệ điều hành:Android 11
            Camera sau:Chính 50 MP & Phụ 12 MP, 12 MP, 8 MP
            Camera trước:32 MP
            Chip:MediaTek Dimensity 1200
            RAM:12 GB
            Bộ nhớ trong:256 GB
            SIM:2 Nano SIMHỗ trợ 5G
            Pin, Sạc:4450mAh, 44W ',
            'feature' => 2,
        ]);
        //type2 laptop
        DB::table('products')->insert([
            'id' => 6,
            'name' => 'Laptop Xiaomi MiBook Air',
            'manu_id' =>3,
            'type_id' =>2,
            'price' =>12890000,
            'image'=> 'laptop-xiaomi-mi-notebook-air-12.5-inch-thiet-ke-746x400.jpg',
            'description' =>  '      
            Cấu hình Laptop Xiaomi MiBook Air 12.5 inch
            Kích thước: 292mm x 202mm x 12.9mm
            Trọng lượng: 1.07kg
            Màn hình: 12.5″ Full HD 1920 x 1080 (176 ppi) 16:9
            CPU: Intel Core M3 6Y30 (4M Cache, up to 2.20 GHz)
            GPU: Intel HD Graphics 515
            Bộ nhớ: 128G SATA SSD (có thể mở rộng thêm một thanh SSD)
            RAM: 4G LPDDR3 1866MHz
            Máy ảnh: Camera 1.0MP 1280 x 720
            WIFI: Intel 2X2, 802.11 b/g/n/ac, 2.4GHz、5GHz
            Âm thanh: Chip âm thanh Realtek ALC255, Loa đôi AKG 2Wx2, Dolby Audio™ Premium
            Kết nối: 1 cổng USB 3.0 (tốc độ 5 Gbps), HDMI 4K, Jack 3.5mm, Type-C
            Hệ điều hành: Windows 10 Home
            Pin: Pin Li-Po 37w(typ), sạc nhanh 30 phút được 50%, thời gian sử dụng dài nhất 11.5 giờ',
            'feature' => 1,
        ]);
        DB::table('products')->insert([
            'id' => 2,
            'name' => 'Laptop Asus Gaming Rog Strix',
            'manu_id' =>4,
            'type_id' =>2,
            'price' =>21490000,
            'image'=> 'd6bb72333118eea373fd684372ba8dc2.jpg',
            'description' =>  '      
            Cấu hình Laptop Asus Gaming Rog Strix G15 G513IH HN015W
            CPU:Ryzen 74800H2.9GHz
            RAM:8 GBDDR4 2 khe (1 khe 8GB + 1 khe rời)3200 MHz
            Ổ cứng:512 GB SSD NVMe PCIe
            Màn hình:15.6"Full HD (1920 x 1080)144Hz
            Card màn hình:Card rờiGTX 1650 4GB
            Cổng kết nối:3 x USB 3.2HDMIJack tai nghe 3.5 mmLAN (RJ45)USB Type-C (Power Delivery and DisplayPort)
            Hệ điều hành:Windows 10 Home SL
            Kích thước, trọng lượng:Dài 354 mm - Rộng 259 mm - Dày 206 mm - Nặng 2.1',
            'feature' => 1,
        ]);
        DB::table('products')->insert([
            'id' => 7,
            'name' => 'Laptop Apple MacBook Air M1',
            'manu_id' =>2,
            'type_id' =>2,
            'price' =>24450000,
            'image'=> 'Laptop Apple MacBook Air M1 2020.jpg',
            'description' =>  '      
            Cấu hình Laptop Apple MacBook Air M1 2020
            CPU:Apple M1
            RAM:8 GB
            Ổ cứng:256 GB SSD
            Màn hình:13.3"Retina (2560 x 1600)
            Card màn hình:Card tích hợp7 nhân GPU
            Cổng kết nối:2 x Thunderbolt 3 (USB-C)Jack tai nghe 3.5 mm
            Đặc biệt:Có đèn bàn phím
            Hệ điều hành:Mac OS
            
            Thiết kế:Vỏ kim loại nguyên khối
            Kích thước, trọng lượng:Dài 304.1 mm - Rộng 212.4 mm - Dày 4.1 mm đến 16.1 mm - Nặng 1.29 kg',
            'feature' => 1,
        ]);
        DB::table('products')->insert([
            'id' => 5,
            'name' => 'Laptop Asus Vivobook 13',
            'manu_id' =>6,
            'type_id' =>2,
            'price' =>17790000,
            'image'=> 'Laptop Asus Vivobook 13 Slate Oled T3300KA.jpg',
            'description' =>  '      
            Cấu hình Laptop Asus Vivobook 13 Slate Oled T3300KA
            Kích thước màn hình: 13.3 inches
            Trọng lượng: 0.78 kg            
            CPU: Intel Pentium Silver N6000 1.1 GHz (4M Cache, up to 3.3 GHz, 4 cores)
            Card đồ họa: Intel® UHD
            Bộ nhớ: 128G SATA SSD (có thể mở rộng thêm một thanh SSD)
            RAM: 8GB
            Hệ điều hành: Windows 11 Home
            Pin: 3-cell Li-ion, 50 Wh
            Trọng lượng: 0.78 kg
            Tính năng đặc biệt: Ổ cứng SSD, Wi-Fi 6, Màn hình cảm ứng, Bảo mật vân tay',
            'feature' => 2,
        ]);
        //type3 tablet
        DB::table('products')->insert([
            'id' => 10,
            'name' => 'iPad Air 5',
            'manu_id' =>2,
            'type_id' =>3,
            'price' =>17790000,
            'image'=> 'iPad Air 5.jpg',
            'description' =>  '      
            Cấu hình iPad Air 5
            Kích thước màn hình: 10.9 inches
            Công nghệ màn hình: Liquid Retina
            Camera sau: 12MP
            Camera trước: 12MP
            Chipset: Chip M1
            Dung lượng: RAM 8 GB
            Bộ nhớ trong: 64 GB
            Hệ điều hành: iPadOS
            Độ phân giải màn hình: 2360 x 1640 pixel
            Loại CPU: CPU 8 nhân
            Trọng lượng: 461 g',
            'feature' => 1,
        ]);
        DB::table('products')->insert([
            'id' => 9,
            'name' => 'Apple iPad Pro 11 128GB',
            'manu_id' =>2,
            'type_id' =>3,
            'price' =>19950000,
            'image'=> 'Apple iPad Pro 11.jpg',
            'description' =>  '      
            Cấu hình Apple iPad Pro 11
            Kích thước màn hình	11 inches
            Công nghệ màn hình: IPS LCD
            Camera sau: 12MP góc rộng,10MP góc siêu rộng
            Camera trước:12MP góc siêu rộng 122 độ
            Chipset: Apple M1 8 nhân
            Dung lượng RAM:	8 GB
            Bộ nhớ trong: 128 GB
            Pin: 7538mAh
            Hệ điều hành: iPadOS
            Độ phân giải màn hình: 2048 x 2732 pixels
            Loại CPU: 8 nhân CPU
            Trọng lượng: 466 g',
            'feature' => 1,
        ]);
        //type4 SmartWatch
        DB::table('products')->insert([
            'id' => 12,
            'name' => 'Apple Watch Series 7 dây thép',
            'manu_id' =>2,
            'type_id' =>4,
            'price' =>19700000,
            'image'=> 'Apple Watch Series 7.jpg',
            'description' =>  '      
            Cấu hình: Apple Watch Series 7
            Kích thước:	45 x 38 x 10.7 mm (1.77 x 1.50 x 0.42 in)
            SIM: eSIM
            Chipset: Apple S7
            Camera trước: 12MP góc siêu rộng 122 độ
            Chipset: Apple M1 8 nhân
            CPU: Dual-core
            GPU: PowerVR
            Bộ nhớ trong: 32GB',
            'feature' => 1,
        ]);
        DB::table('products')->insert([
            'id' => 11,
            'name' => 'Đồng Hồ OPPO Watch 46mm',
            'manu_id' =>5,
            'type_id' =>4,
            'price' =>7990000,
            'image'=> 'avatar-dong-ho-thong-minh-oppo-watch.jpg',
            'description' =>  '      
            Cấu hình đồng hồ OPPO Watch 46mm
            Màn hình: AMOLED1.91 inch
            Mặt: Kính cường lực46 mm
            Thời lượng pin: Khoảng 21 ngày (chế độ tiết kiệm pin)Khoảng 36 giờ (chế độ thường)
            Kết nối với hệ điều hành: Android 6.0 trở lêniOS 12 trở lên
            Tính năng cho sức khỏe: Chế độ luyện tậpTheo dõi giấc ngủTính lượng calories tiêu thụTính quãng đường chạyĐo nhịp timĐếm số bước chân',
            'feature' => 2,
        ]);
        //
        DB::table('products')->insert([
            'id' => 22,
            'name' => 'Pin sạc dự phòng Xiaomi Redmi',
            'manu_id' =>3,
            'type_id' =>5,
            'price' =>450000,
            'image'=> 'pin-sac-du-phong-xiaomi-redmi-20000mah-sac-nhanh-18w_3_.jpg',
            'description' =>  '      
            Pin dự phòng Xiaomi Redmi 20000mAh – Phụ kiện pin sạc an toàn, hiệu suất cao
            Thiết kế nhỏ gọn, hoàn thiện từ nhựa ABS
            Thiết bị sở hữu kích thước tổng thể 154 x 73.6 x 27.3mm, có thể thấy mặc dù không nhỏ gọn như nhiều sản phẩm cao cấp khác, nhưng nó chứa dung lượng pin lên đến 20000mAh.
            Viên pin dung lượng lớn 20000mAh, sạc hai thiết bị cùng một lúc với công suất tối đa 18W
            Đồng thời, pin sạc này cũng có thể sạc cho nhiều loại điện thoại, máy tính bảng khác nhau, thậm chí là smartwatch.
            Điểm thu hút thứ hai của thiết bị này là đầu vào của pin dự phòng cũng khá ấn tượng khi được trang bị cùng lúc cả hai giao tiếp micro-USB và USB Type-C, tạo điều kiện sạc pin thuận tiện hơn',
            'feature' => 2,
        ]);
        DB::table('products')->insert([
            'id' => 13,
            'name' => 'Pin dự phòng Xiaomi 20000mAh',
            'manu_id' =>3,
            'type_id' =>5,
            'price' =>1100000,
            'image'=> 'pin-sac-du-phong-xiaomi-bhr5121gl-20000mah-50w.jpg',
            'description' =>  '      
            Pin dự phòng Xiaomi 20.000mAh 50W (BHR5121GL) - Sạc nhanh 2 chiều
            Thiết kế gọn gàng với vật liệu ABS bền bỉ cùng 3 cổng sạc nhanh
            Xiaomi 20.000mAh 50W (BHR5121GL) cũng được hoàn thiện một cách khá chi tiết và tỉ mỉ với lớp vỏ mờ nhám hạn chế trầy xước và trơn tay khi cầm
            Điểm nhấn khác khiến Xiaomi 20.000mAh 50W (BHR5121GL) trở nên nổi bật hơn là nó sở hữu đến 3 cổng sạc nhanh: 2 cổng USB-A và 1 cổng USB-C, có thể sạc cùng lúc nhiều thiết bị nhưng vẫn cho ra thông số ấn tượng.
            Pin dự phòng Xiaomi 20.000mAh 50W (BHR5121GL) không chỉ có thể sạc đồng thời nhiều thiết bị cùng lúc mà còn mang đến một tốc độ sạc ấn tượng với công suất sạc đạt đến 50W và đương nhiên, nó sẽ tốc độ sạc đạt nhanh hơn so với các bộ sạc 5W thông thường đến 50%.
            Nếu bạn đang tìm kiếm một sạc dự phòng giá tốt mà chất lượng sạc phải nhanh và đảm bảo an toàn thì Xiaomi 20.000mAh 50W (BHR5121GL) chính là lựa chọn hoàn hảo đó nhé!',
            'feature' => 2,
        ]);
        DB::table('products')->insert([
            'id' => 15,
            'name' => 'Pin sạc dự phòng SamSung',
            'manu_id' =>1,
            'type_id' =>5,
            'price' =>690000,
            'image'=> 'SamSung_EB-P3300X_10.000 MAH.jpg',
            'description' =>  '      
            Pin dự phòng SamSung EB-P3300X – Dung lượng lớn, hỗ trợ sạc nhanh 25W
            Đèn LED thông báo tình trạng pin nổi bật cùng thiết kế sơn nhám ôm tay
            Đa số các máy điện thoại hay các thiết bị liên lạc chỉ có mức pin tối đa là 5000mAh, cho nên trang bị cho mình một viên pin sạc dự phòng 10.000mAh là một điều khá hợp lý. Khi bạn có thể sạc lên đến 2-3 lần cho một thiết bị điện thoại di động của mình.
            2 cổng sạc tiện lợi và việc sạc ngược cục sạc dễ dàng thông qua cổng Type-C
            Dù bạn là người chuyên sử dụng loại cáp sạc USB-C hay là Micro-USB đi nữa thì với phụ kiện sạc dự phòng đến từ Samsung này bạn không cần phải lo lắng quá nhiều nếu bạn sạc chúng bằng một trong hai loại dây sạc trên cho cục sạc.',
            'feature' => 1,
        ]);
        DB::table('products')->insert([
            'id' => 16,
            'name' => 'Pin dự phòng Samsung không dây',
            'manu_id' =>1,
            'type_id' =>5,
            'price' =>790000,
            'image'=> '10000_mAh_EB-U1200.jpg',
            'description' =>  '      
            Pin sạc dự phòng Samsung Wireless Charger EB-U1200 – pin dự phòng kết hợp sạc không dây
            Thiết kế nguyên khối hình chữ nhật, 5V-2A khi sạc thường, 9V-1.67A khi sạc nhanh
            Phần vỏ được làm bằng hợp kim nhôm kết hợp với độ gia công nhỏ gọn mang đến sự tiện dụng tối đa cho bạn khi mang theo đi du lịch, đi công tác.
            Sạc nhanh 2 chiều tối đa 15W, dung lương lưu trữ lên đến 10000 mAh
            Tương thích sạc không dây chuẩn Qi',
            'feature' =>2,
        ]);
        DB::table('products')->insert([
            'id' => 17,
            'name' => 'Pin dự phòng Apple Magsafe',
            'manu_id' =>2,
            'type_id' =>5,
            'price' =>2290000,
            'image'=> 'Apple-MagSafe-Battery-Pack.jpg',
            'description' =>  '      
            Pin dự phòng Apple MagSafe - Pin sạc không dây đến từ Apple
            Thiết kế nhỏ gọn, công suất sạc lớn, lên đến 15W
            Apple MagSafe có thể sạc cho iPhone với công suất 5W ở chế độ sạc không dây và lên đến 15W khi sử dụng sạc dây.
            Dung lượng pin lớn, lõi pin lithium an toàn
            Được biết mức giá của pin dự phòng Apple MagSafe chính hãng khá cao so với mặt bằng chung nhưng hầu như mọi người đều lường trước vì đây là đứa con của Apple. ',
            'feature' => 1,
        ]);
        DB::table('products')->insert([
            'id' => 18,
            'name' => 'Tai nghe không dây Xiaomi',
            'manu_id' =>3,
            'type_id' =>6,
            'price' =>1190000,
            'image'=> 'tai-nghe-bluetooth-redmi-buds-3.jpg',
            'description' =>  '      
            Tai nghe Xiaomi Redmi Buds 3 – tai nghe không dây chống ồn hiệu quả
            Thiết kế dạng earbuds, thoải mái khi sử dụng
            Tai nghe với thiết kế màu trắng tinh tế, sang trong khi sử dụng. Đặc biệt, tai nghe còn được trang bị công nghệ kháng nước và bụi bẩn IP54, nhờ đó người dùng có thể sử dụng tai nghe trong tập luyện.
            Xiaomi Redmi Buds 3 được trang bị driver có kích thước lên đến 12nm mang lại khả năng tái tạo tinh chỉnh âm phù hợp với xung hướng cụ thị trường.
            ai nghe Xiaomi Redmi Buds 3 chính hãng với thiết kế tinh tế sang trọng cùng âm thanh chất lượng mang lại trải nghiệm giải trí ấn tượng cho người dùng.',
            'feature' => 2,
        ]);
        DB::table('products')->insert([
            'id' => 19,
            'name' => 'Tai nghe Bluetooth Apple AirPods',
            'manu_id' =>2,
            'type_id' =>6,
            'price' =>4690000,
            'image'=> 'bluetooth-airpods-pro-magsafe-charge-apple.jpg',
            'description' =>  '      
            Tai nghe AirPods Pro Magsafe 2021 - Trải nghiệm âm thanh đầy mê hoặc
            Thiết kế cải tiến tăng độ êm nhẹ khi đeo
            Phần thân được tích hợp vùng cảm biến chạm giúp bạn dễ dàng điều chỉnh âm nhạc, nhận cuộc gọi, và chuyển đổi giữa các tính năng hỗ trợ.
            AirPods Pro 2021 mang đến chất lượng âm thanh đặc sắc và đẳng cấp. Bên trong tai nghe cũng trang bị các phần cứng giúp tăng cường độ mạnh âm bass, cân bằng các dải âm thấp và trung, cũng như lọc tiếng ồn khi thu âm giọng nói cho chất lượng cuộc gọi tốt hơn.
            Sạc pin tiện lợi qua cổng USB-C, dùng không ngừng nghỉ',
            'feature' => 1,
        ]);
        DB::table('products')->insert([
            'id' => 20,
            'name' => 'Tai nghe Bluetooth Samsung',
            'manu_id' =>1,
            'type_id' =>6,
            'price' =>2490000,
            'image'=> 'tai-nghe-bluetooth-true-wireless-galaxy-buds-pro.jpg',
            'description' =>  '      
            Tai nghe Samsung Galaxy Buds Pro - Thiết kế tinh tế cùng chất âm đột phá
            Thiết kế công thái học cho trải nghiệm đeo thoải mái và hoàn hảo
            Chống ồn chủ động ANC, làm chủ âm thanh mà bạn mong muốn
            Samsung tích hợp cho tai nghe Bluetooth Samsung Galaxy Buds Pro công nghệ chống ồn chủ động ANC tiên tiến. Giúp lọc tạp âm hiệu quả để bạn có thể thưởng thức âm thanh, nhận thông báo tin nhắn và gọi thoại với chất lượng tốt nhất.
            Tích hợp 3 mic thu cùng bộ thu nhận giọng nói thế hệ mới nâng cao chất lượng đàm thoại
            Làm việc và giải trí liên tục không lo gián đoạn với thời lượng pin lên đến 20 giờ
            Màng loa 12nm mang đến chất âm sống động, tinh chỉnh bởi AKG',
            'feature' => 1,
        ]);
        DB::table('products')->insert([
            'id' => 21,
            'name' => 'Loa Bluetooth Apple Homepod',
            'manu_id' =>2,
            'type_id' =>7,
            'price' =>23390000,
            'image'=> 'loa-apple-homepod-mini.jpg',
            'description' =>  '      
            Với chiều cao chỉ 3,3 inch, sản phẩm gần như không chiếm không gian nhưng lại có thể lấp đầy toàn bộ căn phòng với âm thanh 360 độ phong phú, âm thanh tuyệt vời từ mọi góc độ.
            Cụ thể, treble và mid đều được thiết kế vừa phải mang đến âm thanh tốt. Về bass của loa thì mang đến sự nhẹ nhàng không quá dồn dập.
            Apple Homepod Mini còn được phủ toàn thân bên ngoài đến cả dây sạc một lớp vải mềm. Tạo sự đồng bộ cho sản phẩm và mang đến cái nhìn đầy tinh tế và sang trọng cho sản phẩm.
            Vi xử lý S5 cũng được trang bị trên Homepod Mini cho khả năng kết nối với nhiều loa khác tạo được không gian âm thanh đa chiều stereo.
            Bạn cũng có thể kết nối với Airplay 2 để tận hưởng âm thanh đa phòng. Bên cạnh đó bạn có thể phát nhạc trên nhiều nền tảng khác nhau như Pandora,
            Amazon Music và iHeartRadio cho khả năng nghe nhạc linh động hơn và có thể tận hưởng nhiều ca khúc khác nhau toàn trên thế giới.',
            'feature' => 1,
        ]);
        DB::table('products')->insert([
            'id' => 23,
            'name' => 'Asus ZenBeam Latte',
            'manu_id' =>4,
            'type_id' =>7,
            'price' =>23390000,
            'image'=> 'asus-zenbeam-latte-loa-bluetooth.jpg',
            'description' =>  '      
            Asus ZenBeam Latte: Loa Bluetooth tích hợp máy chiếu kích thước nhỏ bằng tách cafe
            Thời lượng pin asus zenbeam latte nghe nhạc 12 tiếng và xem video 3 tiếng',
            'feature' => 2,
        ]);


        DB::table('protypes')->insert([
            'type_id' => 1 ,
            'type_name' => 'Smartphone',              
        ]);
            
        DB::table('protypes')->insert([
            'type_id' =>2,
            'type_name' =>'Laptop',
        ]);
        DB::table('protypes')->insert([
            'type_id' =>3,
            'type_name' =>'Ipad',
        ]);
        DB::table('protypes')->insert([
            'type_id' =>4,
            'type_name' =>'SmartWatch',
        ]);        
        DB::table('protypes')->insert([
            'type_id' =>5,
            'type_name' =>'Sạc dự phòng',
        ]);  
        DB::table('protypes')->insert([
            'type_id' =>6,
            'type_name' =>'Tai nghe không dây',
        ]);  
        DB::table('protypes')->insert([
            'type_id' =>7,
            'type_name' =>'Loa Bluetooth',
        ]);    

        
        DB::table('manufactures')->insert([
            'manu_id' => 1 ,
            'manu_name' => 'Samsung',    
        ]);
        DB::table('manufactures')->insert([
            'manu_id' =>2,
            'manu_name' =>'Apple',
        ]);
        DB::table('manufactures')->insert([
            'manu_id' => 3 ,
            'manu_name' => 'Xiaomi',    
        ]);
        DB::table('manufactures')->insert([
            'manu_id' =>4,
            'manu_name' =>'Asus',
        ]);
        DB::table('manufactures')->insert([
            'manu_id' => 5 ,
            'manu_name' => 'Oppo',    
        ]);
        DB::table('manufactures')->insert([
            'manu_id' =>6,
            'manu_name' =>'ViVo',
        ]);
               
   
    }
}