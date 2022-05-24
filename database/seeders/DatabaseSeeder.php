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
            Viên pin dung lượng lớn 20000mAh, sạc hai thiết bị cùng một lúc với công suất tối đa 40W
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
            'name' => 'Pin dự phòng Samsung',
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
        DB::table('products')->insert([
            'id' => 24,
            'name' => 'Loa thanh Soundbar Samsung',
            'manu_id' =>1,
            'type_id' =>7,
            'price' =>1390000,
            'image'=> 'samsung-hw-t420.jpg',
            'description' =>  '      
            Với loa thanh 2.1ch kênh, loa siêu trầm 6.5 inch kết hợp với công suất 150W của loa thanh Samsung HW-T420 đã tạo nên âm thanh trầm bổng mạnh mẽ, sâu lắng hơn cho căn phòng của bạn. Giúp bạn có thể chìm đắm trong âm nhạc, tận hưởng những âm thanh chân thực nhất.
            Loa thanh Samsung HW-T420 không dây đã được các nhà sản xuất nâng cao chất lượng dải âm thành hệ thống âm thanh vòm đa chiều, đỉnh cao mà không cần dây kết nối. Điều này giúp cho người dùng có những cảm nhận âm thanh như đang ở rạp chiếu phim và cảm nhận thực tế từng âm nhanh như đang có mặt ngay tại hiện trường mang đến trải nghiệm tuyệt vời, những phút thư giản nhất.',
            'feature' => 2,
        ]);
        DB::table('products')->insert([
            'id' => 25,
            'name' => 'Loa bluetooth Level Box Slim',
            'manu_id' =>1,
            'type_id' =>7,
            'price' =>990000,
            'image'=> 'loa-bluetooth-samsung-level-box-slim.jpg',
            'description' =>  '      
            Bạn đang có nhu cầu nghe nhạc thư giãn đầu óc sau những giờ làm việc căng thẳng nhưng vẫn chưa chọn được loại loa nghe nhạc nào vừa có trọng lượng nhẹ, chất lượng cao, âm thanh hay? Hãy thử trải nghiệm loa bluetooth Samsung Level Box Slim chính hãng tại shop phụ kiện Samsung với nhiều tính năng nổi bật.
            - Loa Samsung Level Box Slim được đánh giá là một trong những mẫu loa Bluetooth Mini nhỏ gọn nhất của Samsung. Thiết kế hình hộp, mỏng nhẹ và gọn gàng chính vì thế bạn có thể đem đi bất kì đâu và ở bất kì lúc nào, ngay cả khi kẹp trên xe đạp để nghe nhạc khắp mọi nơi cũng được.
            - Nhờ sự tính toán và sử dụng các dòng chất liệu cao cấp hãng Samsung sản xuất sản phẩm chỉ có trọng lượng vỏn vẹn 236g nhưng chứa đựng trong mình là 2 loa nhỏ có công suất 8W cho âm thanh tràn ngập khi hoạt động.
            - Ngay mặt sau loa được hãng trang bị một chân đứng có thể bật ra hoặc gấp lại khi cần, giúp cho loa luôn hướng đến người dùng, cho trải nghiệm âm thanh tốt nhất có thể.
            - Các phím bấm chức năng được tích hợp ngay mặt trên và loa di động Samsung Level Box Slim sẽ sạc được điện thoại có cổng microUSB.
            - Loa Level Box Slim được hãng sản xuất chống nước IPX7 chính vì thế dù bạn đi gặp trời mưa. để loa trong phòng tắm hay bên hồ nước vẫn nghe nhạc bình thường.',
            'feature' => 2,
        ]);
        DB::table('products')->insert([
            'id' => 26,
            'name' => 'Loa bluetooth Samsung Wireless',
            'manu_id' =>1,
            'type_id' =>7,
            'price' =>690000,
            'image'=> 'Loa-bluetooth-scoop-04.jpg',
            'description' =>  '      
            Loa bluetooth Samsung Wireless Scoop là sản phẩm loa bluetooth mới ra mắt của thương hiệu Samsung. Với kiểu dáng cực kỳ nhỏ, có thể nằm gọn trong lòng bàn tay bạn, cùng chất lượng âm thanh chuẩn, loa bluetooth Samsung Scoop hiện là dòng sản phẩm được rất nhiều người dùng yêu thích.
            Trọng lượng loa rất nhẹ, chỉ 151 g, phần thân loa được thiết kế dây treo, bạn có thể thuận tiện móc loa vào balo hay túi,…mang theo bên mình.
            Loa được tích hợp công nghệ bluetooth v4.0, cho kết nối nhanh chóng. Loa bluetooth chỉ gọn gàng trong lòng bàn tay quý khách nhưng mang lại âm to rõ ràng hơn vẻ ngoài.
            Loa bluetooth Samsung Wireless Scoop được trang bị công nghệ chống thấm nước giúp bạn thoải mái thưởng thức âm nhạc mọi trong khi mọi nơi.
            Loa Samsung Wireless Speaker Scoop tích hợp microphone. Giảm tiếng ồn và chống tiếng vang, giúp người dùng có thể nhận cuộc gọi mà không cần chạm vào điện thoại.
            Thời lượng sạc pin lên tới 9h nghe nhạc. Jack 3.5mm kết nối hầu hết các thiết bị.',
            'feature' => 2,
        ]);
        DB::table('products')->insert([
            'id' => 27,
            'name' => 'Loa Bluetooth Xiaomi',
            'manu_id' =>3,
            'type_id' =>7,
            'price' =>869000,
            'image'=> 'loa-xiaomi-mi-bluetooth-speaker.jpg',
            'description' =>  '      
            - Mi Speaker sở hữu thiết kế gọn gàng bắt mắt với lớp vỏ nhôm, thay vì vật liệu nhựa ABS như trên Square Box
            THÔNG SỐ KĨ THUẬT:
                Kích thước: 168 x 24.5 x 58 mm
                Trọng lượng: 270g
                Số kênh: 2(2.0)
                Kiểu loa: Subwoofer
                Công suất: 3W x 2
                Chuẩn Bluetooth: 4.0
                Kiểu Bluetooth hỗ trợ: A2DP\AVRCP
                Khoảng cách kết nối: 10 mét
                Thẻ nhớ: microSD, tối đa 32GB
                Dung lượng pin: 1500mAh
                Thời gian sử dụng: 8h (sạc đầy 2,5h)',
            'feature' => 2,
        ]);
        DB::table('products')->insert([
            'id' => 28,
            'name' => ' Loa bluetooth Xiaomi ZMI B508',
            'manu_id' =>3,
            'type_id' =>7,
            'price' =>248000,
            'image'=> 'loa-bluetooth-xiaomi-9-1.jpg',
            'description' =>  '      
            Thêm một sản phẩm tuyệt vời đến từ Xiaomi đó chính là chiếc loa Bluetooth Xiaomi kiêm sạc không dây này. 20W Xiaomi ZMI B508 ghi điểm với người dùng bởi được trang bị 2 chức năng trong 1 như tên gọi rất tiện lợi. Cùng với kích thước gọn nhỏ, dễ mang theo bên mình, đảm bảo thiết bị này sẽ đem đến cho bạn những phút giây giải trí tuyệt vời nhất.
            - Sử dụng công nghệ Bluetooth 5.0 cho đường truyền âm thanh nhanh chóng và tiện lợi nhất.
            - Công suất của loa lên đến 5W, đem đến chất lượng âm tuyệt hảo.
            - Tích hợp chức năng sạc không dây tiện lợi với chức năng y hệt một chiếc sạc dự phòng có thể đem theo người dễ dàng.
            - Tích hợp nhiều tính năng bảo vệ an toàn, chống thấm nước giúp người dùng có thể yên tâm sử dụng.
            - Thiết kế bề ngoài đẳng cấp, hiện đại với hệ thống đèn led 7 màu thay đổi theo nhịp bài hát, mang đến nhiều trải nghiệm mới lạ khi sử dụng.',
            'feature' => 2,
        ]);
        DB::table('products')->insert([
            'id' => 29,
            'name' => ' Loa bluetooth Xiaomi ZMI B508',
            'manu_id' =>5,
            'type_id' =>7,
            'price' =>900000,
            'image'=> 'loaoppo-12_800x450.jpg',
            'description' =>  '      
            Nói về thiết kế, chiếc loa Bluetooth nhìn khá bầu bĩnh, các góc cạnh được bo tròn. Mặt trước và sau được hoàn thiện từ chất liệu vải nhìn vào khá thích tay, như các bạn có thể thấy mặt trước có thể hiển thị cả thời gian. Bao quanh chiếc loa là phần nhựa dẻo cũng có màu Xanh tông xoẹt tông.
            Phần trên có một số phím nguồn kiêm luôn kết nối Bluetooth, các phím chuyển bài và tăng giảm âm lượng cơ bản.
            Loa Bluetooth đến từ OPPO hỗ trợ công nghệ kết nối Bluetooth 5.0, việc kết nối diễn ra tương đối nhanh chóng. Phạm vi để "tìm thấy nhau" giữa chiếc loa với thiết bị của bạn trong bán kính khoảng 10m.
            Loa Bluetooth của OPPO có dung lượng pin 750 mAh, có thể phát nhạc được khoảng 8 giờ đồng hồ cũng là thời lượng kha khá rồi. Nhưng để sạc đầy pin cho chiếc loa thì lại hơi mất thời gian, đến 3 tiếng đồng hồ .',
            'feature' => 2,
        ]);
        DB::table('products')->insert([
            'id' => 30,
            'name' => ' Loa bluetooth Pill +',
            'manu_id' =>2,
            'type_id' =>7,
            'price' =>5000000,
            'image'=> 'pill-loa-bluetooth-apple-1.jpg',
            'description' =>  '      
            Phiên bản Pill+ không còn hình dạng "tròn trĩnh" của một viên thuốc mà thay vào đó là kiểu dáng phẳng ở 2 mặt trên dưới, tinh tế và hiện đại. Chất âm của Pill+ cũng được cải thiện rõ rệt, với hệ thống loa trầm tạo âm bass mạnh mẽ quen thuộc bên cạnh loa tweeter bổ sung vào 2 dải âm còn lại (mid, treble) sự chi tiết và rõ ràng. Pill+ có khả năng chơi nhạc lên tới 12 tiếng liền. Trên thân loa sẽ có 1 hệ thống đèn LED để báo hiệu dung lượng pin và một cổng USB để thực hiện chức năng sạc dự phòng cho smartphone. Đi kèm chiếc loa này là một ứng dụng được Apple phát triển riêng, cho phép người dùng kết nối Pill+ với nhiều thiết bị, thiết lập EQ cũng như ghép nối với một chiếc Pill+ khác để tạo nên dàn âm thanh 2.0.',
            'feature' => 2,
        ]);
        DB::table('products')->insert([
            'id' => 31,
            'name' => ' Loa Bluetooth Samsung Bottle',
            'manu_id' =>1,
            'type_id' =>7,
            'price' =>990000,
            'image'=> 'Loa-Bluetooth-Samsung-Bottle-EO-SG710-1.jpg',
            'description' =>  '      
            Loa Bluetooth Samsung Bottle EO-SG710 được mệnh danh là chiếc đèn biết hát. Với thiết kế bên ngoài độc đáo, chiếc đèn ngủ kiêm loa di động vừa được Samsung cho ra mắt.
            Loa Bluetooth Samsung Bottle EO-SG710 là sản phẩm được thiết kế khá đặc biệt trông giống như một bình đựng nước. Sự phối hợp của màu trắng và màu xám tạo nên vẻ thanh lịch, tinh tế phù hợp với mọi không gian. Samsung còn bố trí một quai xách giả da làm từ nhựa cứng và cố định. Thiết kế khá tiện dụng, dễ cầm loa di chuyển hoặc treo ở nhiều vị trí khác nhau.
            Phần thân được tách biệt với hệ thống loa 360 độ đặt ở nửa bên dưới. Còn phía trên là lớp nhựa mờ với hệ thống đèn led nhiều màu tích hợp bên trong. Lớp nhựa này dễ bám bẩn nhưng cũng không khó để làm sạch. Kích thước nhỏ gọn với trọng lượng chỉ 360g dễ dàng di chuyển ở bất cứ đâu.
            Loa Bluetooth Samsung Bottle EO- SG710 mang đến cho người dùng chất âm ấm áp, độ chi tiết khá tốt, âm lượng vừa đủ, phù hợp với không gian nhỏ như phòng ngủ. Thưởng thức âm nhạc trọn vẹn trong không gian của chính mình với âm thanh đa chiều 360 độ. Mẫu sản phẩm loa bluetooth Samsung này có khả năng tái tạo âm thanh tốt, không thiên về một chất âm nào cả rất phù hợp với nhiều thể loại nhạc.
            Loa Bluetooth Samsung Bottle EO-SG710 được tích hợp công nghệ Bluetooth 4.0 cho nên kết nối nhanh chóng, ổn định độ trễ thấp, tương thích với nhiều thiết bị phát nhạc như điện thoại, máy tính bảng, laptop… Ngoài ra loa cũng có jack cắm 3.5mm để bạn có thể kết nối với các thiết bị không có bluetooth như tivi, pc qua dây cáp.',
            'feature' => 2,
        ]);
        DB::table('products')->insert([
            'id' => 32,
            'name' => 'Samsung Galaxy Watch 4 40mm',
            'manu_id' =>1,
            'type_id' =>4,
            'price' =>5490000,
            'image'=> 'samsung-galaxy-watch-4-40mm.jpg',
            'description' =>  '      
            Màn hình:
            SUPER AMOLED1.19 inch
            Thời lượng pin:
            Khoảng 1.5 ngày
            Kết nối với hệ điều hành:
            Android dùng Google Mobile Service
            Mặt:
            Kính cường lực Gorrilla Glass Dx+40 mm
            Tính năng cho sức khỏe:
            Theo dõi giấc ngủTính lượng calories tiêu thụĐiện tâm đồĐo huyết ápĐo nhịp timĐo nồng độ oxy (SpO2)Đếm số bước chân',
            'feature' => 2,
        ]);
        DB::table('products')->insert([
            'id' => 33,
            'name' => 'Samsung Galaxy Watch 4 LTE',
            'manu_id' =>1,
            'type_id' =>4,
            'price' =>6990000,
            'image'=> 'samsung-galaxy-watch-4-lte-44mm.jpg',
            'description' =>  '      
            Màn hình:
            SUPER AMOLED1.36 inch
            Thời lượng pin:
            Khoảng 1.5 ngày
            Kết nối với hệ điều hành:
            Android dùng Google Mobile Service
            Mặt:
            Kính cường lực Gorrilla Glass Dx+44 mm
            Tính năng cho sức khỏe:
            Theo dõi giấc ngủĐiện tâm đồĐo huyết ápĐo nhịp timĐo nồng độ oxy (SpO2)Đếm số bước chân',
            'feature' => 2,
        ]);
        DB::table('products')->insert([
            'id' => 34,
            'name' => 'Apple Watch SE 40mm viền nhôm',
            'manu_id' =>2,
            'type_id' =>4,
            'price' =>7490000,
            'image'=> 'se-40mm-vien-nhom-day-cao-su.jpg',
            'description' =>  '      
            Màn hình:
            OLED1.57 inch
            Thời lượng pin:
            Khoảng 1.5 ngày
            Kết nối với hệ điều hành:
            iOS bản mới nhất
            Mặt:
            Ion-X strengthened glass40 mm
            Tính năng cho sức khỏe:
            Chế độ luyện tậpTheo dõi giấc ngủTính lượng calories tiêu thụTính quãng đường chạyĐo nhịp timĐếm số bước chân',
            'feature' => 2,
        ]);
        DB::table('products')->insert([
            'id' => 35,
            'name' => 'Đồng hồ Xiaomi Mi Watch Lite',
            'manu_id' =>3,
            'type_id' =>4,
            'price' =>1280000,
            'image'=> 'watch-live.jpg',
            'description' =>  '      
            Nằm trong số những chiếc đồng hồ thông minh giá có giá rẻ, Xiaomi Mi Watch Lite là một chiếc smartwatch có đẹp mắt với hoàn thiện chất lượng cao và nhiều tính năng thông minh.
            Đồng hồ thông minh Xiaomi Mi Watch Lite gây ấn tượng với người dùng bởi thiết kế độc đáo. Thay vì màn hình tròn như thế hệ trước thì Mi Watch Lite được trang bị mặt vuông với 4 góc bo tròn mềm mại. Bên cạnh đó, khung viền của đồng hồ được làm bằng nhôm chắc chắn mang đến sự sang trọng và bền bỉ vượt trội.
            Dây đeo chất liệu silicon dẻo và mềm đi kèm sản phẩm mang lại cảm giác êm ái và dễ chịu khi đeo trên tay.
            Ngoài ra, một điểm cộng khác cho thiết bị này là khả năng 5ATM. Với trang bị này, người dùng có thể thoải mái đi dưới trời mưa hoặc rửa tay mà không lo ảnh hưởng tới chất lượng của đồng hồ.
            Xiaomi Mi Watch Lite được trang bị màn hình LCD kích thước 1.41 inch độ phân giải HD mang đến hình ảnh ấn tượng và sắc nét tới từng chi tiết. Với độ sáng 350 nit, người dùng có thể sử dụng tốt trong mọi điều kiện ánh sáng khác nhau mà không lo bị lóa.',
            'feature' => 2,
        ]);
        DB::table('products')->insert([
            'id' => 36,
            'name' => 'Đồng hồ Xiaomi Mi Watch',
            'manu_id' =>3,
            'type_id' =>4,
            'price' =>2290000,
            'image'=> 'GS.008422_FEATURE_92387.jpg',
            'description' =>  '      
            Chiếc đồng hồ thông minh này chỉ có trọng lượng 32 gram siêu nhẹ với khung viền nhựa nhẹ nhàng, thanh thoát. Dây đeo silicone thiết kế đục lỗ phù hợp nhiều kích cỡ cổ tay, mềm mại, mỏng nhẹ và ôm cổ tay tạo cảm giác thoải mái cho người dùng khi đeo đồng hồ suốt ngày dài. Đặc biệt dây đeo có thể tháo rời thuận tiện hơn khi vệ sinh đồng hồ.
            Đồng hồ thông minh Xiaomi được trang bị màn hình AMOLED kích thước 1.39 inch có độ phân giải 454 x 454 pixels, độ sáng lên đến 450 nits cho khả năng hiển thị hình ảnh sắc nét, sống động, quan sát thông tin rõ nét ngay cả khi sử dụng đồng hồ ở ngoài trời. Xiaomi Mi Watch còn được trang bị mặt kính cường lực Gorilla Glass 3 mỏng nhẹ nhưng vô cùng chắc chắn, hạn chế trầy xước, khả năng chịu lực cao tăng độ bền cho thiết bị.
            Xiaomi cập nhật thêm nhiều mặt đồng hồ mới với hơn 100 mẫu giao diện mặt đồng hồ rực rỡ, đầy màu sắc cho phép người dùng có thể thoải mái chọn mẫu mình thích. Đặc biệt, bạn còn có thể tự tạo riêng cho mình một mặt đồng hồ theo phong cách cá nhân với những tấm hình mà bạn yêu thích.
            Chiếc đồng hồ thông minh này cung cấp cho người dùng 17 chế độ luyện tập thể thao chuyên nghiệp như chạy bộ, đạp xe, leo núi, bơi lội, yoga, tập luyện tự do... Ngoài ra còn có 100 bài tập hỗ trợ, hỗ trợ bạn rèn luyện sức khỏe tốt hơn, tập luyện bài bản và chuyên nghiệp, khoa học hơn.
            Tính năng màn hình luôn hiển thị giúp người dùng dễ dàng theo dõi thông báo cuộc gọi, tin nhắn hay thông báo từ các ứng dụng: Zalo, Messenger (Facebook), Line,... để bạn không bỏ lỡ thông tin quan trọng nào. Chỉ cần kết nối đồng hồ với các thiết bị khác thông qua Bluetooth v5.0, GPS, bạn có thể nhận thông báo trên chiếc đồng hồ đeo tay của mình.',
            'feature' => 2,
        ]);
        DB::table('products')->insert([
            'id' => 37,
            'name' => 'Đồng hồ Xiaomi Mi band 4C',
            'manu_id' =>3,
            'type_id' =>4,
            'price' =>450000,
            'image'=> '1_637394418901019285.jpg',
            'description' =>  '      
            Trái với kiểu dáng thuôn dài với các góc được bo tròn của những chiếc Mi Band cũ, Xiaomi Mi Band 4C được thiết kế vuông vức, tạo ra phong cách nam tính và khoẻ khoắn khi đeo trên tay.
            Hướng tới người dùng đeo đồng hồ khi tập luyện thể thao, Xiaomi đã chọn chất liệu nhựa cao cấp bền nhẹ để chế tác khung vỏ thiết bị, dây đeo cao su có kiểu dáng ôm tay, mềm mại mà vẫn đảm bảo chắc chắn khi người dùng vận động mạnh. 
            Màn hình được bảo vệ bởi kính cường lực hạn chế tối đa tình trạng xước dăm và hư hại trong quá trình sử dụng. Lớp phủ màn hình có khả năng chống vây tay, hạn chế màn hình mờ ảnh hưởng tới hiển thị. Màn hình TFT được trang bị có độ phân giải 128x220, có thể hiển thị hình ảnh với màu sắc trung thực với độ sáng tối đa 200 nit.
            Với chuẩn kết nối Bluetooth 5.0, Xiaomi Mi Band 4C có thể kết nối từ xa với smartphone trong phạm vi lên tới 10 mét. Nhờ đó, bạn có thể tập luyện mà vẫn nhận được các thông báo cần thiết từ điện thoại, dễ dàng chuyển bài hát đang nghe hoặc từ chối cuộc gọi tới chỉ với một thao tác trên màn hình Mi Band 4C. Sản phẩm đạt độ tương thích tối ưu với các dòng iPhone cài đặt iOS 10 và Android 5.0 trở lên.
            Cung cấp năng lượng hoạt động cho Mi Band 4C là viên pin 130 mAh. Bạn cũng sẽ chỉ mất khoảng hai tiếng chờ đợi để thiết bị nạp đủ pin cho tối đa 14 ngày vận hành bền bỉ tiếp theo. Nhờ đó, bạn không cần phải lo lắng tới việc phải đem theo bộ sạc trong những chuyến du lịch hoặc công tác nhiều ngày.',
            'feature' => 2,
        ]);
        DB::table('products')->insert([
            'id' => 38,
            'name' => 'Đồng hồ thông minh Xiaomi',
            'manu_id' =>3,
            'type_id' =>4,
            'price' =>3500000,
            'image'=> 'dong-ho-thong-minh-xiaomi-watch.jpg',
            'description' =>  '      
            Giữ nguyên kiểu dáng thiết kế cổ điển với mặt đồng hồ dạng tròn, Watch Color 2 trang bị màn hình 1.43 inch, sử dụng tấm nền AMOLED với mật độ điểm ảnh 326 ppi. Màn hình này của Watch Color 2 hỗ trợ tần số quét 60Hz cho trải nghiệm sử dụng mượt mà hơn, hỗ trợ tính năng Always on. Có tới hơn 200 mặt đồng hồ khác nhau và người dùng có thể tuỳ chỉnh theo sở thích cá nhân.
            Xiaomi Watch Color 2 có trọng lượng khá nhẹ chỉ 36.3 gam, không cho cảm giác quá nặng nề khi đeo trên cổ tay, đặc biệt là khi tập luyện. Khung viền của Watch Color 2 hoàn thiện từ kim loại, còn dây đeo hoàn thiện từ silicon với thiết kế cài truyền thống.
            Xiaomi Watch Color 2 hỗ trợ 117 chế độ luyện tập thể dục thể thao, trong đó bao gồm 19 chế độ chuyên nghiệp cường độ cao như bóng rổ, tenis, bơi lội... Đồng hồ hỗ trợ chuẩn kháng nước 5ATM cho phép hoạt động trong nhiều điều kiện thời tiết.
            Xiaomi trang bị cho Watch Color 2 cảm biến sinh trắc học PPG thế hệ mới, cho phép đo nhịp tim liên tục theo thời gian thực trong vòng 24 giờ, hỗ trợ đưa ra cảnh báo khi nhịp tim quá cao hoặc quá thấp. Khi đồng bộ với ứng dụng Xiaomi Wearable, Xiaomi Watch Color 2 lưu giữ nhịp tim của người đeo trong 30 ngày và phân tích các chỉ số nhằm đưa ra các lời khuyên có ích cho sức khoẻ người dùng.',
            'feature' => 2,
        ]);
        DB::table('products')->insert([
            'id' => 39,
            'name' => 'iPhone 13 Pro Max 128GB',
            'manu_id' =>2,
            'type_id' =>1,
            'price' =>29690000,
            'image'=> 'iphone_13-_pro-5_4.jpg',
            'description' =>  '  
            ĐẶC ĐIỂM NỔI BẬT    
            - Hiệu năng vượt trội - Chip Apple A15 Bionic mạnh mẽ, hỗ trợ mạng 5G tốc độ cao
            - Không gian hiển thị sống động - Màn hình 6.7" Super Retina XDR độ sáng cao, sắc nét
            - Trải nghiệm điện ảnh đỉnh cao - Cụm 3 camera kép 12MP, hỗ trợ ổn định hình ảnh quang học
            - Tối ưu điện năng - Sạc nhanh 20 W, đầy 50% pin trong khoảng 30 phút
            - Xét về chất liệu, iPhone 13 Pro Max vẫn áp dụng chất liệu thép không gỉ như thế hệ trước đó. Mặt này cũng được phủ một lớp kính mờ giúp hạn chế bám bụi bẩn và vân tay. Ngoài ra, điện thoại cũng sẽ đảm bảo được khả năng chống bụi / nước chuẩn IP68.',
            'feature' => 1,
        ]);
        DB::table('products')->insert([
            'id' => 40,
            'name' => 'iPhone SE 2022 | Chính hãng VN/A',
            'manu_id' =>2,
            'type_id' =>1,
            'price' =>11990000,
            'image'=> 'download_1__6_7.jpg',
            'description' =>  '  
            ĐẶC ĐIỂM NỔI BẬT    
            - Hiệu năng vượt trội với vi xử lý mới nhất - Chip Apple A15 tiên tiến nhất, cân mọi tác vụ
            - Tận hưởng không gian hiển thị sắc nét - Màn hình Liquid Retina nhỏ gọn 4.7 inch tỷ lệ 16:9
            - Giải trí trọn vẹn ngày dài - Viên pin có nhiều cải tiến giúp bạn không còn lo lắng khi sử dụng
            - Camera ghi trọn mọi khoảnh khắc - Camera đơn 12 MP f/1.8 hỗ trợ công nghệ Deep Fusion
            - Nếu các thế hệ trước đó được Apple trang bị khung nhôm hoặc khung thép không gỉ thì tới SE 2022, máy được Apple trang bị khung nhôm không chứa Carbon. Đây là thế hệ iPhone đầu tiên của Apple được trang khung viền này.',
            'feature' => 1,
        ]);
        DB::table('products')->insert([
            'id' => 41,
            'name' => 'Samsung Galaxy Note 20 Ultra 5G',
            'manu_id' =>1,
            'type_id' =>1,
            'price' =>18990000,
            'image'=> 'yellow_final_3.jpg',
            'description' =>  '      
            ĐẶC ĐIỂM NỔI BẬT
            - Sang trọng, cao cấp - Màu sắc độc đáo và cuốn hút
            - Chụp ảnh chuyên nghiệp - Bộ 3 camera hỗ trợ Zoom xa đến 30X
            - Ghi chú nhanh chóng, chính xác với bút S- Pen thế hệ mới
            - Chơi game đỉnh cao - Exynos 990 7nm mạnh mẽ, hiệu năng xử lý vượt trội ',
            'feature' => 1,
        ]);
        DB::table('products')->insert([
            'id' => 42,
            'name' => 'Samsung Galaxy A32',
            'manu_id' =>1,
            'type_id' =>1,
            'price' =>5880000,
            'image'=> 'samsung-galaxy-a32-18_1.jpg',
            'description' =>  '      
            ĐẶC ĐIỂM NỔI BẬT
            - Màn hình siêu mượt, hình ảnh sắc nét - Màn hình Super AMOLED FullHD, tần số quét 90Hz
            - Thiết kế tối giản, thể hiện phong cách - Màu sắc trẻ trung, mặt lưng bóng bẩy, cụm camera thiết kế mới.
            - Ghi lại mọi khoảnh khắc - Cụm camera 64MP tuyệt đỉnh, camera selfie 20MP chất lượng.
            - Pin ấn tượng, kéo dài lên đến 2 ngày - Dung lượng 5000mAh, sạc nhanh 15W
            - Đa nhiệm vượt trội, hiệu năng mạnh mẽ - Helio G80 8 nhân, RAM 8GB, chế độ Game Booster ',
            'feature' => 1,
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
            'type_name' =>'Backup charger',
        ]);  
        DB::table('protypes')->insert([
            'type_id' =>6,
            'type_name' =>'Wireless headphones',
        ]);  
        DB::table('protypes')->insert([
            'type_id' =>7,
            'type_name' =>'Bluetooth Speaker',
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