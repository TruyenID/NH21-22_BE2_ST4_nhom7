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
        
        //
        DB::table('products')->insert([
            'id' => 22,
            'name' => 'Pin sạc dự phòng Xiaomi Redmi 20000mAh sạc nhanh 18W',
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
            'feature' => 1,
        ]);
        DB::table('products')->insert([
            'id' => 13,
            'name' => 'Pin dự phòng Xiaomi 20000mAh 50W (BHR5121GL)',
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
            'feature' => 1,
        ]);
        DB::table('products')->insert([
            'id' => 14,
            'name' => 'Pin sạc dự phòng Xiaomi Redmi VXN4305GL 10.000mAh',
            'manu_id' =>3,
            'type_id' =>5,
            'price' =>280000,
            'image'=> 'pin-sac-du-phong-xiaomi-redmi-vxn4305gl-10000mah.jpg',
            'description' =>  '      
            Sạc thả ga với pin sạc dự phòng Xiaomi Redmi VNX4305GL 10000mAh
            Pin sạc dự phòng Xiaomi Redmi 10000mAh được thiết kế khá nhỏ gọn với trọng lượng 300g cùng các bo góc ấn tượng khiến mang đến bạn cảm giác lúc cầm nắm trong tay rất dễ chịu. 
            Dung lượng 10.000 mAh, sạc nhiều lần hơn trong ngày
            Cổng vào Type C, Micro-USB và 2 cổng ra USB-C
            Chiếc sạc dự phòng này được trang bị cổng sạc với cường độ dòng điện ra 5V - 2.6A, hỗ trợ sạc nhanh tối đa, cùng với 2 cổng đầu ra USB-C.
            Một trong những điểm khiến Xiaomi Redmi 10000mAh nổi bật hơn những chiếc pin sạc dự phòng khác chính là ở khả năng sạc nhanh thông qua cổng USB Type C.',
            'feature' => 1,
        ]);
        DB::table('products')->insert([
            'id' => 15,
            'name' => 'Pin sạc dự phòng SamSung EB-P3300X 10.000 MAH sạc nhanh 25W chính hãng',
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
            'name' => 'Pin dự phòng Samsung kiêm sạc không dây 10000 mAh EB-U1200',
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
            'feature' => 1,
        ]);
        DB::table('products')->insert([
            'id' => 17,
            'name' => 'Pin dự phòng Apple Magsafe | Chính hãng Apple Việt Nam (MJWY3)',
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
            'name' => 'Tai nghe không dây Xiaomi Redmi Buds 3',
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
            'feature' => 1,
        ]);
        DB::table('products')->insert([
            'id' => 19,
            'name' => 'Tai nghe Bluetooth Apple AirPods Pro 2021 Magsafe | Chính hãng Apple Việt Nam',
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
            'name' => 'Tai nghe Bluetooth Samsung Galaxy Buds Pro',
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
            'name' => 'Loa Bluetooth Apple Homepod Mini',
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
            'name' => 'Asus ZenBeam Latte: Loa Bluetooth tích hợp máy chiếu xem video',
            'manu_id' =>4,
            'type_id' =>7,
            'price' =>23390000,
            'image'=> 'asus-zenbeam-latte-loa-bluetooth.jpg',
            'description' =>  '      
            Asus ZenBeam Latte: Loa Bluetooth tích hợp máy chiếu kích thước nhỏ bằng tách cafe
            Thời lượng pin asus zenbeam latte nghe nhạc 12 tiếng và xem video 3 tiếng',
            'feature' => 1,
        ]);


        DB::table('protypes')->insert([
            'type_id' => 1 ,
            'type_name' => 'Phone',              
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
