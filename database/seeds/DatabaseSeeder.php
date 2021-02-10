<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::table('admins')->insert([
            'username' => "Admin",
            'password' => Hash::make('Nonbetonamu'),
        ]);

        // Them loai thuc an

        DB::table('food_types')->insert([
            'name' => "Các món mới",
        ]);

        DB::table('food_types')->insert([
            'name' => "Mẹt",
        ]);

        DB::table('food_types')->insert([
            'name' => "Gà",
        ]);

        DB::table('food_types')->insert([
            'name' => "Vịt",
        ]);

        DB::table('food_types')->insert([
            'name' => "Bò",
        ]);

        DB::table('food_types')->insert([
            'name' => "Heo",
        ]);

        DB::table('food_types')->insert([
            'name' => "Hải sản",
        ]);

        DB::table('food_types')->insert([
            'name' => "Bún, Phở",
        ]);

        DB::table('food_types')->insert([
            'name' => "Cơm, Mì",
        ]);

        DB::table('food_types')->insert([
            'name' => "Gỏi",
        ]);

        DB::table('food_types')->insert([
            'name' => "Lẫu",
        ]);

        DB::table('food_types')->insert([
            'name' => "Các món khác",
        ]);

        //Thêm thức ăn

        DB::table('foods')->insert([
            'foodtype' => "1",
            'foodnamevn' => "Ốc om chuối",
            'foodnamejp' => "タニシバナナ煮込み",
            'price' => "850",
            'image' => "ocom.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "1",
            'foodnamevn' => "Ốc xào sả ớt",
            'foodnamejp' => "タニシレモングラス",
            'price' => "680",
            'image' => "ocsaot.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "1",
            'foodnamevn' => "Ốc nhồi",
            'foodnamejp' => "タニシ蒸",
            'price' => "850",
            'image' => "ocnhoi.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "1",
            'foodnamevn' => "Cá hấp",
            'foodnamejp' => "蒸魚",
            'price' => "1280",
            'image' => "cahap.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "2",
            'foodnamevn' => "Mẹt heo",
            'foodnamejp' => "豚セット",
            'price' => "1980",
            'image' => "metheo.png",
            'status' => "1",
        ]);



        DB::table('foods')->insert([
            'foodtype' => "2",
            'foodnamevn' => "Mẹt bò",
            'foodnamejp' => "牛セット",
            'price' => "1980",
            'image' => "metbo.png",
            'status' => "1",
        ]);



        DB::table('foods')->insert([
            'foodtype' => "2",
            'foodnamevn' => "Mẹt hải sản",
            'foodnamejp' => "海鮮セット",
            'price' => "1980",
            'image' => "methaisan.png",
            'status' => "1",
        ]);


        DB::table('foods')->insert([
            'foodtype' => "2",
            'foodnamevn' => "Mẹt gà",
            'foodnamejp' => "鳥セット",
            'price' => "1980",
            'image' => "metga.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "2",
            'foodnamevn' => "Mẹt heo luộc",
            'foodnamejp' => "豚茹でセット",
            'price' => "1980",
            'image' => "heoluoc.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "2",
            'foodnamevn' => "Mẹt vịt",
            'foodnamejp' => "ダックセット",
            'price' => "1980",
            'image' => "metvit.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "2",
            'foodnamevn' => "Mẹt bún đậu",
            'foodnamejp' => "ブンダウマムトム",
            'price' => "1980",
            'image' => "metdau.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "2",
            'foodnamevn' => "Mẹt chiên",
            'foodnamejp' => "揚げセット",
            'price' => "1980",
            'image' => "metchien.png",
            'status' => "1",
        ]);


        DB::table('foods')->insert([
            'foodtype' => "3",
            'foodnamevn' => "Trứng non cháy tỏi",
            'foodnamejp' => "卵の子ニンニクソース炒め",
            'price' => "680",
            'image' => "trungnon.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "3",
            'foodnamevn' => "Gà luộc",
            'foodnamejp' => "鳥茹でる",
            'price' => "1100",
            'image' => "galuoc.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "3",
            'foodnamevn' => "Chân gà",
            'foodnamejp' => "鳥足",
            'price' => "580",
            'image' => "changa.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "3",
            'foodnamevn' => "Sụn gà chiên",
            'foodnamejp' => "軟骨揚げ",
            'price' => "580",
            'image' => "sungachien.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "3",
            'foodnamevn' => "Gà hon",
            'foodnamejp' => "鳥レモングラス煮込み",
            'price' => "580",
            'image' => "gahon.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "3",
            'foodnamevn' => "Gà xé bóp",
            'foodnamejp' => "鳥サラダ",
            'price' => "580",
            'image' => "goiga.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "3",
            'foodnamevn' => "Gà nướng",
            'foodnamejp' => "鳥焼き",
            'price' => "580",
            'image' => "ganuong.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "3",
            'foodnamevn' => "Gà roti",
            'foodnamejp' => "鳥ニンニクソース炒め",
            'price' => "580",
            'image' => "gachienmam.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "3",
            'foodnamevn' => "Gà rang lá chanh",
            'foodnamejp' => "手羽先揚げ",
            'price' => "680",
            'image' => "garoti.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "4",
            'foodnamevn' => "Vịt hon",
            'foodnamejp' => "ダックレモングラス煮込み",
            'price' => "780",
            'image' => "vithon.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "4",
            'foodnamevn' => "Vịt nướng nguyên con",
            'foodnamejp' => "ダック焼き一匹",
            'price' => "2800",
            'image' => "vitnguyencon.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "4",
            'foodnamevn' => "Vịt hai màu",
            'foodnamejp' => "ダックセット",
            'price' => "2800",
            'image' => "vithaimau.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "4",
            'foodnamevn' => "Vịt nướng",
            'foodnamejp' => "ダック焼き",
            'price' => "780",
            'image' => "vitnuong.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "4",
            'foodnamevn' => "Gỏi vịt",
            'foodnamejp' => "ダックサラダ",
            'price' => "890",
            'image' => "goivit.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "4",
            'foodnamevn' => "Vịt luộc",
            'foodnamejp' => "ダック茹で",
            'price' => "780",
            'image' => "vitluoc.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "5",
            'foodnamevn' => "Típ bò",
            'foodnamejp' => "牛煮込み",
            'price' => "780",
            'image' => "tipbo.png",
            'status' => "1",
        ]);


        DB::table('foods')->insert([
            'foodtype' => "5",
            'foodnamevn' => "Bò bóp thấu",
            'foodnamejp' => "牛サラダ",
            'price' => "680",
            'image' => "bobopthau.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "5",
            'foodnamevn' => "Bò cuốn lá cải",
            'foodnamejp' => "牛野菜巻き焼き",
            'price' => "680",
            'image' => "bocuonlacai.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "5",
            'foodnamevn' => "Bò xào cần",
            'foodnamejp' => "牛セロリ炒め",
            'price' => "680",
            'image' => "boxaocan.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "5",
            'foodnamevn' => "Bò xào dưa cải",
            'foodnamejp' => "牛セロリ炒め",
            'price' => "680",
            'image' => "boxaocaichua.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "6",
            'foodnamevn' => "Thịt heo nướng",
            'foodnamejp' => "豚焼肉",
            'price' => "480",
            'image' => "thitheonuong.png",
            'status' => "1",
        ]);


        DB::table('foods')->insert([
            'foodtype' => "6",
            'foodnamevn' => "Đuôi heo hon",
            'foodnamejp' => "豚テールレモングラス煮込み",
            'price' => "540",
            'image' => "duoiheo.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "6",
            'foodnamevn' => "Sụn heo xào cải chua",
            'foodnamejp' => "高菜漬け軟骨炒め",
            'price' => "580",
            'image' => "sunheocaichua.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "6",
            'foodnamevn' => "Dưa cải xào ba chỉ",
            'foodnamejp' => "高菜漬け豚炒め",
            'price' => "580",
            'image' => "bachixaocaichua.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "6",
            'foodnamevn' => "Lòng heo xào cải chua",
            'foodnamejp' => "高菜漬け内臓炒め",
            'price' => "580",
            'image' => "longxaodua.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "6",
            'foodnamevn' => "Tai heo bóp",
            'foodnamejp' => "豚耳サラダ",
            'price' => "580",
            'image' => "goiheo.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "6",
            'foodnamevn' => "Nồi trường",
            'foodnamejp' => "豚の小袋",
            'price' => "680",
            'image' => "noituong.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "6",
            'foodnamevn' => "Diềm nướng",
            'foodnamejp' => "豚ハラミ焼肉",
            'price' => "580",
            'image' => "diemnuong.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "7",
            'foodnamevn' => "Sò lụa xào sả",
            'foodnamejp' => "アサリレモングラス炒め",
            'price' => "480",
            'image' => "soluasa.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "7",
            'foodnamevn' => "Sò lụa xào tỏi",
            'foodnamejp' => "アサリニンニク炒め",
            'price' => "480",
            'image' => "luatoi.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "7",
            'foodnamevn' => "Sò lụa sa tế",
            'foodnamejp' => "アサリチリソース炒め",
            'price' => "480",
            'image' => "luasate.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "7",
            'foodnamevn' => "Râu mực chiên",
            'foodnamejp' => "げそから",
            'price' => "480",
            'image' => "raumuc.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "7",
            'foodnamevn' => "Tôm xóc tỏi",
            'foodnamejp' => "海老ニンニクソース炒め",
            'price' => "980",
            'image' => "tomxoctoi.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "7",
            'foodnamevn' => "Tôm nướng muối ớt",
            'foodnamejp' => "海老塩焼き",
            'price' => "480",
            'image' => "tomnuong.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "7",
            'foodnamevn' => "Mực hấp",
            'foodnamejp' => "イカ蒸",
            'price' => "680",
            'image' => "muchap.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "8",
            'foodnamevn' => "Bún thịt nướng",
            'foodnamejp' => "焼肉ビーフン",
            'price' => "680",
            'image' => "bunthitnuong.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "8",
            'foodnamevn' => "Bún bò giò",
            'foodnamejp' => "ブンボー",
            'price' => "780",
            'image' => "bunbogio.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "8",
            'foodnamevn' => "Bún bò",
            'foodnamejp' => "ブンボー",
            'price' => "780",
            'image' => "bunbo.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "8",
            'foodnamevn' => "Phở gà, Phở gà",
            'foodnamejp' => "鳥フォー",
            'price' => "680",
            'image' => "phoga.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "8",
            'foodnamevn' => "Mì Quảng",
            'foodnamejp' => "ミクアン",
            'price' => "680",
            'image' => "miquang.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "8",
            'foodnamevn' => "Bánh canh",
            'foodnamejp' => "ベトナムうどん",
            'price' => "680",
            'image' => "banhcanh.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "9",
            'foodnamevn' => "Cơm chiên",
            'foodnamejp' => "チャーハン",
            'price' => "680",
            'image' => "comchien.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "9",
            'foodnamevn' => "Cơm rang dưa bò",
            'foodnamejp' => "高菜漬け牛肉チャーハン",
            'price' => "780",
            'image' => "comduabo.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "9",
            'foodnamevn' => "Mì xào hải sản",
            'foodnamejp' => "海鮮焼きそば",
            'price' => "680",
            'image' => "mixaohaisan.png",
            'status' => "1",
        ]);


        DB::table('foods')->insert([
            'foodtype' => "10",
            'foodnamevn' => "Gỏi sứa",
            'foodnamejp' => "クラゲサラダ",
            'price' => "780",
            'image' => "goisua.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "10",
            'foodnamevn' => "Gỏi thập cẩm",
            'foodnamejp' => "盛り合わせサラダ",
            'price' => "680",
            'image' => "goithapcam.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "10",
            'foodnamevn' => "Gỏi xoài",
            'foodnamejp' => "マンゴーサラダ",
            'price' => "890",
            'image' => "goixoai.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "10",
            'foodnamevn' => "Xa lát trộn giấm",
            'foodnamejp' => "サラダ",
            'price' => "380",
            'image' => "xalachgiam.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "10",
            'foodnamevn' => "Rau muống xào tỏi",
            'foodnamejp' => "空芯菜炒め",
            'price' => "380",
            'image' => "raumuong.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "10",
            'foodnamevn' => "Cải xào tỏi",
            'foodnamejp' => "小松菜炒め",
            'price' => "380",
            'image' => "caixao.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "11",
            'foodnamevn' => "Bò nhúng dấm",
            'foodnamejp' => "牛しゃぶしゃぶ酢だし",
            'price' => "1280",
            'image' => "bonhungdam.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "12",
            'foodnamevn' => "Gỏi cuốn",
            'foodnamejp' => "春巻き",
            'price' => "390",
            'image' => "goicuon.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "12",
            'foodnamevn' => "Nem rán",
            'foodnamejp' => "揚げ春巻き",
            'price' => "390",
            'image' => "nemran.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "12",
            'foodnamevn' => "Xôi chiên tôm thịt",
            'foodnamejp' => "海老肉おこわ揚げ",
            'price' => "580",
            'image' => "xoithit.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "12",
            'foodnamevn' => "Xôi chiên kho quẹt",
            'foodnamejp' => "おこわ揚げ",
            'price' => "480",
            'image' => "xoiquet.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "12",
            'foodnamevn' => "Bắp xào bơ tỏi",
            'foodnamejp' => "コーンバター",
            'price' => "380",
            'image' => "bapxao.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "12",
            'foodnamevn' => "Đậu rán tẩm hành",
            'foodnamejp' => "豆腐揚げ",
            'price' => "380",
            'image' => "dautamhanh.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "12",
            'foodnamevn' => "Đậu rán mắm tôm",
            'foodnamejp' => "豆腐揚げ、マムトム",
            'price' => "380",
            'image' => "dauranmamtom.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "12",
            'foodnamevn' => "Trứng gà lộn",
            'foodnamejp' => "ベトナム卵ソース炒め",
            'price' => "200",
            'image' => "trunggalon.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "12",
            'foodnamevn' => "Ếch chiên",
            'foodnamejp' => "カエル揚げ",
            'price' => "780",
            'image' => "echchien.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "12",
            'foodnamevn' => "Ếch sả ớt",
            'foodnamejp' => "カエルレモングラス",
            'price' => "780",
            'image' => "echsaot.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "12",
            'foodnamevn' => "Dê hon",
            'foodnamejp' => "ヤギレモングラス煮込み",
            'price' => "850",
            'image' => "dehon.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "12",
            'foodnamevn' => "Khoai tây chiên",
            'foodnamejp' => "フライドポテト",
            'price' => "380",
            'image' => "khoaitaychien.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "12",
            'foodnamevn' => "Gà vịt bóp",
            'foodnamejp' => "鳥ダックサラダ",
            'price' => "1300",
            'image' => "goigavit.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "12",
            'foodnamevn' => "Cá chỉ vàng",
            'foodnamejp' => "あじ焼き",
            'price' => "380",
            'image' => "cachivang.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "12",
            'foodnamevn' => "Bún",
            'foodnamejp' => "ブン",
            'price' => "200",
            'image' => "bunkhong.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "12",
            'foodnamevn' => "Xôi trắng",
            'foodnamejp' => "おこわ",
            'price' => "200",
            'image' => "xoitrang.png",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "12",
            'foodnamevn' => "Cơm trắng",
            'foodnamejp' => "ご飯",
            'price' => "150",
            'image' => "comtrang.png",
            'status' => "1",
        ]);

        // Thêm loại thức uống

        DB::table('drink_types')->insert([
            'name' => "Thức uống mới",
        ]);

        DB::table('drink_types')->insert([
            'name' => "Nước ngọt",
        ]);

        DB::table('drink_types')->insert([
            'name' => "Bia",
        ]);

        DB::table('drink_types')->insert([
            'name' => "ハイボール",
        ]);

        DB::table('drink_types')->insert([
            'name' => "Cocktail",
        ]);

        DB::table('drink_types')->insert([
            'name' => "酎ハイ",
        ]);

        DB::table('drink_types')->insert([
            'name' => "Rượu",
        ]);

        DB::table('tables')->insert([
            'name' => "1",
            'number' => "1",
            'status' => "1",
        ]);

        DB::table('tables')->insert([
            'name' => "1",
            'number' => "2",
            'status' => "1",
        ]);
        DB::table('tables')->insert([
            'name' => "1",
            'number' => "3",
            'status' => "1",
        ]);
        DB::table('tables')->insert([
            'name' => "1",
            'number' => "4",
            'status' => "1",
        ]);
        DB::table('tables')->insert([
            'name' => "1",
            'number' => "5",
            'status' => "1",
        ]);
        DB::table('tables')->insert([
            'name' => "1",
            'number' => "6",
            'status' => "1",
        ]);
        DB::table('tables')->insert([
            'name' => "1",
            'number' => "7",
            'status' => "1",
        ]);
        DB::table('tables')->insert([
            'name' => "1",
            'number' => "8",
            'status' => "1",
        ]);



        DB::table('tables')->insert([
            'name' => "2",
            'number' => "1",
            'status' => "1",
        ]);
        DB::table('tables')->insert([
            'name' => "2",
            'number' => "2",
            'status' => "1",
        ]);
        DB::table('tables')->insert([
            'name' => "2",
            'number' => "3",
            'status' => "1",
        ]);
        DB::table('tables')->insert([
            'name' => "2",
            'number' => "4",
            'status' => "1",
        ]);
        DB::table('tables')->insert([
            'name' => "2",
            'number' => "5",
            'status' => "1",
        ]);
        DB::table('tables')->insert([
            'name' => "2",
            'number' => "6",
            'status' => "1",
        ]);
        DB::table('tables')->insert([
            'name' => "2",
            'number' => "7",
            'status' => "1",
        ]);
        DB::table('tables')->insert([
            'name' => "2",
            'number' => "8",
            'status' => "1",
        ]);
        DB::table('tables')->insert([
            'name' => "2",
            'number' => "9",
            'status' => "1",
        ]);
        DB::table('tables')->insert([
            'name' => "2",
            'number' => "10",
            'status' => "1",
        ]);
        DB::table('tables')->insert([
            'name' => "2",
            'number' => "11",
            'status' => "1",
        ]);
        DB::table('tables')->insert([
            'name' => "2",
            'number' => "12",
            'status' => "1",
        ]);

        DB::table('tables')->insert([
            'name' => "3",
            'number' => "1",
            'status' => "1",
        ]);

    }
}
