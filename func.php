<?php

function canxuong($dd,$mm,$yy,$giosinh)
{
	$lunar = convertSolar2Lunar($dd, $mm, $yy, 7);
		list($dd,$mm,$yy) = explode("/",$lunar['ngaysinh']);
		$w = 0.0;
		switch($lunar['canchi']){
			case 'Giáp Tý':
				$w = 1.2;break;
			case 'Bính Tý': //1 lượng 6 chỉ
				$w = 1.6;break;
			case 'Mậu Tý': //1 lượng 5 chỉ
				$w = 1.5;break;
			case 'Canh Tý': //0 lượng 7 chỉ
				$w = 0.7;break;
			case 'Nhâm Tý': //0 lượng 5 chỉ
				$w = 0.5;break;
			case 'Ất Sửu': //0 lượng 9 chỉ
				$w = 0.9;break;
			case 'Đinh Sửu': //0 lượng 8 chỉ
				$w = 0.8;break;
			case 'Kỷ Sửu': //0 lượng 8 chỉ
				$w = 0.8;break;
			case 'Tân Sửu': //0 lượng 7 chỉ
				$w = 0.7;break;
			case 'Quý Sửu': //0 lượng 5 chỉ
				$w = 0.5;break;
			case 'Bính Dần': //0 lượng 6 chỉ
				$w = 0.6;break;
			case 'Mậu Dần': //0 lượng 8 chỉ
				$w = 0.8;break;
			case 'Canh Dần': //0 lượng 9 chỉ
				$w = 0.9;break;
			case 'Nhâm Dần': //0 lượng 9 chỉ
				$w = 0.9;break;	
			case 'Giáp Dần': //1 lượng 2 chỉ
				$w = 1.2;break;
			case 'Đinh Mão': //0 lượng 7 chỉ
				$w = 0.7;break;
			case 'Kỷ Mão': //1 lượng 9 chỉ
				$w = 1.9;break;
			case 'Tân Mão': //1 lượng 2 chỉ
				$w = 1.2;break;
			case 'Quý Mão': //1 lượng 2 chỉ
				$w = 1.2;break;
			case 'Ất Mão': //0 lượng 8 chỉ
				$w = 0.8;break;
			case 'Mậu Thìn': //1 lượng 2 chỉ
				$w = 1.2;break;
			case 'Canh Thìn': //1 lượng 2 chỉ
				$w = 1.2;break;
			case 'Nhâm Thìn': //1 lượng 0 chỉ
				$w = 1.0;break;
			case 'Giáp Thìn': //0 lượng 8 chỉ
				$w = 0.8;break;
			case 'Bính Thìn': //0 lượng 8 chỉ
				$w = 0.8;break;
			case 'Kỷ Tỵ': //0 lượng 5 chỉ
				$w = 0.5;break;
			case 'Tân Tỵ': //0 lượng 6 chỉ
				$w = 0.6;break;
			case 'Quý Tỵ': //0 lượng 7 chỉ
				$w = 0.7;break;
			case 'Ất Tỵ': //0 lượng 7 chỉ
				$w = 0.7;break;
			case 'Đinh Tỵ': //0 lượng 6 chỉ
				$w = 0.6;break;
			case 'Canh Ngọ': //0 lượng 9 chỉ
				$w = 0.9;break;
			case 'Nhâm Ngọ': //0 lượng 8 chỉ
				$w = 0.8;break;
			case 'Giáp Ngọ': //1 lượng 5 chỉ
				$w = 1.5;break;
			case 'Bính Ngọ': //1 lượng 3 chỉ
				$w = 1.3;break;
			case 'Mậu Ngọ': //1 lượng 9 chỉ
				$w = 1.9;break;
			case 'Tân Mùi': //0 lượng 8 chỉ
				$w = 0.8;break;
			case 'Quý Mùi': //0 lượng 7 chỉ
				$w = 0.7;break;
			case 'Ất Mùi': //0 lượng 6 chỉ
				$w = 0.6;break;
			case 'Đinh Mùi': //0 lượng 5 chỉ
				$w = 0.5;break;
			case 'Kỷ Mùi': //0 lượng 6 chỉ
				$w = 0.6;break;
			case 'Nhâm Thân': //0 lượng 7 chỉ
				$w = 0.7;break;
			case 'Giáp Thân': //0 lượng 5 chỉ
				$w = 0.5;break;
			case 'Bính Thân': //0 lượng 5 chỉ
				$w = 0.5;break;
			case 'Mậu Thân': //1 lượng 4 chỉ
				$w = 1.4;break;
			case 'Canh Thân': //0 lượng 8 chỉ
				$w = 0.8;break;
			case 'Quý Dậu': //0 lượng 8 chỉ
				$w = 0.8;break;
			case 'Ất Dậu': //1 lượng 5 chỉ
				$w = 1.5;break;
			case 'Đinh Dậu': //1 lượng 4 chỉ
				$w = 1.4;break;
			case 'Kỷ Dậu': //0 lượng 5 chỉ
				$w = 0.5;break;
			case 'Tân Dậu': //1 lượng 6 chỉ
				$w = 1.6;break;
			case 'Giáp Tuất': //0 lượng 5 chỉ
				$w = 0.5;break;
			case 'Bính Tuất': //0 lượng 6 chỉ
				$w = 0.6;break;
			case 'Mậu Tuất': //1 lượng 4 chỉ
				$w = 1.4;break;
			case 'Canh Tuất': //0 lượng 9 chỉ
				$w = 0.9;break;
			case 'Nhâm Tuất': //1 lượng 0 chỉ
				$w = 1.0;break;
			case 'Ất Hợi': //0 lượng 9 chỉ
				$w = 0.9;break;
			case 'Đinh Hợi': //1 lượng 6 chỉ
				$w = 1.6;break;
			case 'Kỷ Hợi': //0 lượng 9 chỉ
				$w = 0.9;break;
			case 'Tân Hợi': //1 lượng 7 chỉ
				$w = 1.7;break;
			case 'Quý Hợi': //0 lượng 7 chỉ
				$w = 0.7;break;
		}
		
		$temp_mm = $mm;
		if($lunar['nhuan']){
			if($dd>14)
				$temp_mm++;
		}
		
		switch($temp_mm){
			case 1: //Tháng Giêng: 0 lượng 6 chỉ
				$w += 0.6;break;
			case 2: //Tháng Hai: 0 lượng 7 chỉ
				$w += 0.7;break;
			case 3: //Tháng Ba: 1 lượng 8 chỉ
				$w += 1.8;break;
			case 4: //Tháng Tư: 0 lượng 9 chỉ
				$w += 0.9;break;
			case 5: //Tháng Năm: 0 lượng 5 chỉ
				$w += 0.5;break;
			case 6: //Tháng Sáu: 1 lượng 6 chỉ
				$w += 1.6;break;
			case 7: //Tháng Bảy: 0 lượng 9 chỉ
				$w += 0.9;break;
			case 8: //Tháng Tám: 1 lượng 5 chỉ
				$w += 1.5;break;
			case 9: //Tháng Chín: 1 lượng 8 chỉ
				$w += 1.8;break;
			case 10: //Tháng Mười: 1 lượng 8 chỉ
				$w += 1.8;break;
			case 11: //Tháng Mười Một: 0 lượng 9 chỉ
		
				$w += 0.9;break;
			case 12: //Tháng Chạp: 0 lượng 5 chỉ
				$w += 0.5;break;
		}
		
		switch($dd){
			case 1 : //Ngày mùng một: 0 lượng 5 chỉ
				$w += 0.5;break;
			case 2 : //Ngày mùng hai: 1 lượng 0 chỉ
				$w += 1.0;break;
			case 3 : //Ngày mùng ba: 0 lượng 8 chỉ
				$w += 0.8;break;
			case 4 : //Ngày mùng bốn: 1 lượng 5 chỉ
				$w += 1.5;break;
			case 5 : //Ngày mùng năm: 1 lượng 6 chỉ
				$w += 1.6;break;
			case 6 : //Ngày mùng sáu: 1 lượng 5 chỉ
				$w += 1.5;break;
			case 7 : //Ngày mùng bảy: 0 lượng 8 chỉ
				$w += 0.8;break;
			case 8 : //Ngày mùng tám: 1 lượng 6 chỉ
				$w += 1.6;break;
			case 9 : //Ngày mùng chín: 0 lượng 8 chỉ
				$w += 0.8;break;
			case 10 : //Ngày mùng mười: 1 lượng 6 chỉ
				$w += 1.6;break;
			case 11 : //Ngày mười một: 0 lượng 9 chỉ
				$w += 0.9;break;
			case 12 : //Ngày mười hai: 1 lượng 7 chỉ
				$w += 1.7;break;
			case 13 : //Ngày mười ba: 0 lượng 8 chỉ
				$w += 0.8;break;
			case 14 : //Ngày mười bốn: 1 lượng 7 chỉ
				$w += 1.7;break;
			case 15 : //Ngày rằm: 1 lượng 0 chỉ
				$w += 1.0;break;
			case 16 : //Ngày mười sáu: 0 lượng 8 chỉ
				$w += 0.8;break;
			case 17 : //Ngày mười bảy: 0 lượng 9 chỉ
				$w += 0.9;break;
			case 18 : //Ngày mười tám: 1 lượng 8 chỉ
				$w += 1.8;break;
			case 19 : //Ngày mười chín 0 lượng 5 chỉ
				$w += 0.5;break;
			case 20 : //Ngày hai mươi: 1 lượng 5 chỉ
				$w += 1.5;break;
			case 21 : //Ngày hai mươi mốt: 1 lượng 0 chỉ
				$w += 1.0;break;
			case 22 : //ngày hai mươi hai: 0 lượng 9 chỉ
				$w += 0.9;break;
			case 23 : //Ngày hai mươi ba: 0 lượng 8 chỉ
				$w += 0.8;break;
			case 24 : //Ngày hai mươi bốn: 0 lượng 9 chỉ
				$w += 0.9;break;
			case 25 : //Ngày hai mươi lăm: 1 lượng 5 chỉ
				$w += 1.5;break;
			case 26 : //Ngày hai mươi sáu: 1 lượng 8 chỉ
				$w += 1.8;break;
			case 27 : //Ngày hai mươi bảy: 0 lượng 7 chỉ
				$w += 0.7;break;
			case 28 : //Ngày hai mươi tám: o lượng 8 chỉ
				$w += 0.8;break;
			case 29 : //Ngày hai mươi chín: 1 lượng 6 chỉ
				$w += 1.6;break;
			case 30 : //Ngày ba mươi: 0 lượng 6 chỉ
				$w += 0.6;break;
		}
		
		switch($giosinh){
			case 1: //Giờ Tý (23h - 01h): 1 lượng 6 chỉ
				$w += 1.6;break;
			case 2: //Giờ Sửu (01h - 03h): 0 lượng 6 chỉ
				$w += 0.6;break;
			case 3: //Giờ Dần (03h - 05h): 0 lượng 7 chỉ
				$w += 0.7;break;
			case 4: //Giờ Mẹo (05h - 07h): 1 lượng 0 chỉ
				$w += 1.0;break;
			case 5: //Giờ Thìn (07h - 09h): 0 lượng 9 chỉ
				$w += 0.9;break;
			case 6: //Giờ Tỵ (09h - 11h): 1 lượng 6 chỉ
				$w += 1.6;break;
			case 7: //Giờ Ngọ (11h - 13h): 1 lượng 0 chỉ
				$w += 1.0;break;
			case 8: //Giờ Mùi (13h - 15h): 0 lượng 8 chỉ
				$w += 0.8;break;
			case 9: //Giờ Thân (15h - 17h): 0 lượng 8 chỉ
				$w += 0.8;break;
			case 10: //Giờ Dậu (17h - 19h): 0 lượng 9 chỉ
				$w += 0.9;break;
			case 11: //Giờ Tuất (19h - 21h): 0 lượng 6 chỉ
				$w += 0.6;break;
			case 12: //Giờ Hợi (21h - 23h): 0 lượng 6 chỉ
				$w += 0.6;break;
		}
		$w = number_format($w,1);
		switch($w){
			case 2.2:
				$message = 'Số này thân hàn cốt lạnh khổ sở linh đinh, quanh năm lo kiếm ăn độ nhựt mà còn thiếu thốn, rồi có thể trở thành ăn mày vì số mạng vậy.
		Người có số lượng và số chỉ nầy căn kiếp cơ cực bần hàn, thân thế bơ vơ đói khổ, tha phương cầu thực, trôi nổi linh đinh không định hướng, vô gia đình, vô nghề nghiệp.';
				$poetry = 'Một đời bần bạc chịu lênh đênh
		Vô phước trải bao nỗi bất bình
		Khéo ở hiền lành trao đức hạnh
		Trái ngon quả ngọt kiếp lai sinh.';
				break;
			case 2.3:
				$message = 'Số này hễ mưu toan làm việc chi cũng khó nên được, chẳng trông cậy nơi anh em họ hàng, đành chịu tha phương cầu thực.
		Nói chung, người có số lượng và số chỉ nầy khó được hanh thông, lúc trẻ lận đận, khi thăng lúc trầm, danh nghiệp không được vững chắc, không gần gũi cha mẹ, anh em, xa quê hương từ thuở nhỏ.';
				$poetry = 'Số này so lại cũng bần hàn
		Thê tử không hiền lại kém ngoan
		Bôn tẩu xứ người, xa tổ quán
		Trăm ngàn cay đắng với thời gian.';
				break;
			case 2.4:
				$message = 'Số này suy ra không có phước lộc gia đình, Khó gầy nên sự nghiệp, không nương cậy nơi họ hàng cốt nhục, chỉ lưu lạc tha phương cầu thực tới già thôi.
		Nói chung, người có số lượng và số chỉ nầy, gia đình nghèo khó, họ hàng cách xa, tha phương cầu thực. Cuộc đời từ trẻ tới già cũng chưa được sung sướng.';
				$poetry = 'Phước lộc ông cha chẳng được nhiều
		Chiếc thân cô độc nghĩ buồn hiu
		Vợ con nhà cửa đành ly tán
		Xa xứ lìa quê tuổi xế chiều.';
				break;
			case 2.5:
				$message = 'Suy ra số này tổ nghiệp suy vi, ít có phần gầy dựng nên gia đình được, họ hàng cốt nhục thì như than với giá, một đời khổ sở chỉ tự mình tìm sự sống mà thôi.
		Nói chung, người có số lượng và số chỉ nầy thì tay làm hàm nhai, tự mình tháo vát lo lấy thân phận, tổ phụ thiếu tu nhân tích đức, khiến con cháu về sau phải chịu lận đận vất vả.';
				$poetry = 'Một thân vất vả một thân mình
		Tổ nghiệp tiêu tan hận bất bình
		Ruột thịt như người dưng kẻ lạ
		Ra công gắng sức tự mưu sinh.';
				break;
			case 2.6:
				$message = 'Số này trọn đời khốn khổ một mình mưu tính công việc làm ăn luôn luôn nhưng chẳng thành. Nên lìa xa quê cha đất tổ mới hầu được đủ ăn và may ra lúc già được thanh nhàn.
		Nói chung, người có số lượng và số chỉ nầy sớm chịu mồ côi, cuộc đời hoàn toàn không được hạnh phúc, vợ chồng vất vả. Nếu lúc trẻ có đạo tâm thì trở về già được ấm no.';
				$poetry = 'Mưu vọng bao nhiêu hận bấy nhiêu
		Thành công chưa thấy, thất công nhiều
		Xa quê lập nghiệp còn cơ hội
		Đến tuổi già nua gặp nước triều.';
				break;
			case 2.7:
				$message = 'Số này một đời làm công việc ít có được người khác mưu toan giúp đỡ, khó nhờ cậy phước đức của tổ tông. Chỉ tự lực một mình làm ăn, từ bé đến lớn chẳng có gì hay cả.
		Nói chung, người có số lượng và số chỉ nầy thì việc làm ăn thường gặp thất bại. Cuộc đời may ít rủi nhiều, con đường sinh kế chật vật. Tình cảm khô cằn vì thân phận cô đơn. Khả năng kiến thức không có, nên thiếu người đồng chí hướng.';
				$poetry = 'Một đời làm việc ít suy lường
		Nhờ có mẹ cha liệu chủ trương
		Mai kia chiều xuống thung huyên mất
		Của giữ không xong thọ chẵng trường.';
				break;
			case 2.8:
				$message = 'Số này làm ăn lộn xộn rối ren như bòng bong, về sản nghiệp của tổ tông thì như giấc mộng. Nếu chẳng làm con nuôi người ta hay là không đổi họ thì cũng phải dời đổi gia cư đến đôi ba lần.
		Nói chung, người có số lượng và số chỉ nầy tâm trí rối loạn. Công việc làm ăn tính toán đều bỏ dở, đời sống tạm bợ, được không mừng mất không lo. Có của phụ ấm mà không được hưởng. Duyên nợ đôi lần dang dở sau mới bền.';
				$poetry = 'Một đời mưu sự tựa phiêu bồng
		Tổ nghiệp bao nhiêu cũng sạch không
		Thay họ đổi tên đi xứ khác
		Cơ đồ gầy dựng mới còn mong.';
				break;
			case 2.9:
				$message = 'Số này năm xưa thì lẩn quẩn chưa hề được hanh thông, dầu có công danh nhưng cũng trễ muộn, phải tới ngoài 40 tuổi mới có thể đặng an nhàn.
		Nói chung, người có số lượng và số chỉ nầy, trưởng thành trong gia đình không được khá giả. Nhưng có mạng lớn, đến đâu cũng có quý nhân giúp đỡ. Nhờ đó mà cuộc sống có phần phong lưu. Đến 40 tuổi mới an hưởng phú quý.';
				$poetry = 'Thiếu thời vận hạn lắm truân chuyên
		Số phải tứ tuần mới phúc duyên
		Nhưng nếu dời nhà thay đổi họ
		Thì đời thêm rạng rỡ uy quyền.';
				break;
			case 3.0:
				$message = 'Số này lao lực phong trần, trong đời gặp lắm cảnh lầm than. Dầu có siêng năng hà tiện thì tới tuổi già chỉ đỡ ưu sầu chút đỉnh thôi.
		Nói chung, người có số lượng và số chỉ nầy tâm trí thường hay suy nghĩ. Làm ăn thường gặp sự thất bại nhiều hơn thành công, sự nghiệp đôi ba lần sụp đổ. Đến 50 tuổi thì mới an hưởng tuổi già, trở về già sẽ nhờ con cái.';
				$poetry = 'Lao nhọc bao nhiêu lận đận hoài
		Xứ người bôn tẩu gót mòn chai
		Ăn cần ở kiệm đừng liêu lỏng
		Tuổi chiều bóng xế được gia tài.';
				break;
			case 3.1:
				$message = 'Số này cũng vất vả lao đao vì sinh kế, khó nhờ sự nghiệp của tổ tông mà nên nhà nên cửa. Từ nửa đời người trở lên mới gọi là đủ ăn đủ mặc.
		Nói chung, người có số lượng và số chỉ nầy phần đông lúc thiếu thời phải chịu vất vả, ba chìm bảy nổi tha phương lập nghiệp. Vợ chồng gặp nhau nơi xứ lạ, lúc 38 tuổi mới tạo nên sự nghiệp.';
				$poetry = 'Trời đất âm u khuất ánh dương
		Một thân lao khổ đã trăm đường
		Trung niên hy vọng nên công nghiệp
		Xa xứ lìa quê mới thọ trường.';
				break;
			case 3.2:
				$message = 'Số này năm xưa gặp vận rủi, khó mưu đặng công việc gì. Về sau mới có tài lợi như nước chảy lần tới. Từ nửa đời người trở lên thì ăn mặc đặng no đủ, lúc ấy công danh lợi lộc đặng hanh thông.
		Nói chung, người có số lượng và số chỉ nầy lúc nhỏ được sung sướng tạo dựng nhà cửa. Vợ chồng sống rất hạnh phúc, sanh con cái rất thông minh. Sau nhờ con gái nhiều hơn. Sống xa cha mẹ hay anh em.
		';
				$poetry = 'Tuổi trẻ bôn chôn ích lợi gì
		Từ hăm hai tuổi hết sầu bi
		Tiền tài danh vọng từ từ tới
		Họa phước tạo công đã định kỳ.';
				break;
			case 3.3:
				$message = 'Số này lúc ban sơ làm ăn công việc chi cũng khó thành, mưu tính trăm đường chỉ uổng công thôi. Từ nửa đời người trở lên mới gặp vận hay sẽ tới như dòng nước chảy lại, sau tài lợi tấn phát đặng nhiều.
		Nói chung, người có số lượng và số chỉ nầy thì việc làm ăn lúc đầu thường hay gặp trở ngại, sau mới có kết quả. Vợ chồng sống không được hòa thuận. Đến năm 45 tuổi mới tốt, làm ăn mới trôi chảy, hạnh phúc gia đình mới yên tâm.';
				$poetry = 'Uổng công mưu sự nước xuôi giòng
		Tuổi trẻ bôn chôn cũng hóa không
		Bốn chục trở lên vận số vượng
		Cây khô gặp nước lại đơm bông.';
				break;
			case 3.4:
				$message = 'Số này có phước đức tăng đạo, phải xa quê hương cha mẹ mà xuất gia nương cửa phật, hàng ngày tụng niệm thì mới đặng y lộc viên mãn.
		Nói chung, người có số lượng và số chỉ nầy thì có số tu hành. Sớm muộn cũng xuất gia nương nhờ của Phật, duyên nợ lỡ làng, nghang trái. Đàn ông thì làm ăn thất bại long đong lận đận, nghèo khổ.';
				$poetry = 'Số mạng cao xanh đã định rồi
		Có căn tu niệm được cao ngôi
		Xuất gia đầu Phật quy Tam Bảo
		Uy đức tòa sen chín phẩm ngồi.';
				break;
			case 3.5:
				$message = 'Số này phước lượng sanh bình chẳng đặng chu toàn, chẳng hưởng phần căn cơ của tổ nghiệp truyền lại. Còn sự sanh nhai thì phải chờ khi vận tới rồi mới đặng no đủ hơn xưa.
		Nói chung, người có số lượng và số chỉ nầy thì cuộc đời giàu sang phú quý, làm ăn phát đạt, con cái đầy đủ. Tuy vậy, hạnh phúc gia đình không được yên ấm.';
				$poetry = 'Phước căn tu tích một phần ba
		Sản nghiệp vài nương ruộng lúa nhà
		Cần kiệm lâu ngày đủ ăn mặc
		Tương lai an hưởng tuổi về già.';
				break;
			case 3.6:
				$message = 'Số này một đời chẳng cần phải lao lực chi lắm, một tay gầy dựng nên gia nghiệp, cái phước chẳng phải vừa.
		Nói chung, người có số lượng và số chỉ nầy thì làm chơi ăn thiệt, số có quý nhân phò trì nên dù gặp việc gì rắc rối sau cũng được thành công. Số này sống trường thọ. Sau con cháu thi đỗ đạt.';
				$poetry = 'Chẳng cần lao nhọc quá làm chi
		Tự kết duyên lành phỉ dạ đi
		Bởi có phước tinh thường chiếu mạng
		Làm ăn phát đạt rạng môn quy.';
				break;
			case 3.7:
				$message = 'Số này làm chẳng đặng thành công, anh em ít giúp sức, chỉ một thân cô lập. Tuy rằng cũng có tổ nghiệp chút đỉnh, nhưng lúc lại thì rành rành đó lúc đi thì chẳng biết hết bao giờ.
		Nói chung, người có số lượng và số chỉ nầy phần đông xuất thân trong gia đình khá giả, được hưởng phần hương quả. Có chí lớn tha phương lập nghiệp, tánh can cường không muốn nhờ cậy ai cả dù là cha mẹ. Muốn tự tay mình lập nghiệp mà do mồ hôi nước mắt mình tạo ra...';
				$poetry = 'Vận mạng làm gì cũng chẳng thành
		Anh em ly tán, độc cô hành
		Còn nhờ phúc ấm truyền lưu lại
		Gặp dịp may ra cũng nổi danh.';
				break;
			case 3.8:
				$message = 'Số này cốt cách thanh cao, sớm đặng thi đỗ, tên họ ghi trên bảng vàng. Từ năm 36 sẽ đặng phú quí vinh hoa.
		Nói chung, người có số lượng và số chỉ nầy thì thân đơn độc mả, bỏ nhà xa quê hương từ tấm bé, tìm xứ khác lập nghiệp. Của tiền tạo ra thấy đó rồi mất đó. Tình duyên trắc trở buổi ban đầu sau mới hợp. Tuổi già cũng như trẻ, tâm trí thường hay suy nghĩ.';
				$poetry = 'Uy nghi thuần khiết tánh thanh cao
		Tuổi trẻ không lo chuyên khó, giàu
		Ba sáu năm này khoa cập đệ
		Bạch y một sớm đời hồng hào.';
				break;
			case 3.9:
				$message = 'Số này trọn đời vận mạng chẳng đặng thông đạt, Làm việc thành rồi cũng hư. Khổ tâm kiệt lực dựng nên gia kế tới sau này cũng như giấc mộng.
		Nói chung, người có số lượng và số chỉ nầy cốt cách phong nhã, hào hoa. Tuổi nhỏ học hành giỏi dắn, trí óc thông minh, khôn ngoan tột bực. Đến 36 tuổi thì đường quan lộc công danh rạng rỡ. Vợ đẹp, con cái sau nầy hiển đạt.';
				$poetry = 'Con đường quan lộ chửa hanh thông
		Tính việc gì rồi cũng hóa không
		Lao lực lao tâm mòn mỏi lắm
		Bao nhiêu mưu tính nước xuôi giòng.';
				break;
			case 4.0:
				$message = 'Số này phước lộc đặng lâu dài, nhưng xưa phải chịu qua nhiều nổi phong ba vất vả. Sau này đặng hưởng an nhàn phú quí.
		Nói chung, người có số lượng và số chỉ nầy lúc nhỏ có phần gian truân, nhưng thời gian ngắn thôi. Cuộc sống từ 25 tuổi trở lên mới được phát đạt. Công danh sự nghiệp được hanh thông. Về sau được hưởng của, hoạch tài chẳng qua đó là chổ tích đức phùng đức.';
				$poetry = 'Cuộc đời đã trãi lắm phong sương
		Nay được giàu sang rạng tổ đường
		Mọi việc tính gì đều được nấy
		Tương lai lộc thọ ắt miên trường.';
				break;
			case 4.1:
				$message = 'Số này là người tài ba lỗi lạc, công chuyện trước sau chẳng đồng nhau, từ nửa đời sắp lên lại có phước tiêu diêu, chớ chẳng như xưa kia vận chưa đạt.
		Nói chung, người có số lượng và số chỉ nầy đúng là nhân vật tài ba tột bực. Sau nầy nên danh phận với đời. Có dịp xuất ngoại. Tới năm 51 tuổi thì thảnh thơi con cháu đầy đủ.';
				$poetry = 'Số này suy thạnh vận không đồng
		Có sẵn kỳ tài lập dị công
		Trung niên thời vận hay thay đổi
		Từ đó tới già mạng được thông.';
				break;
			case 4.2:
				$message = 'Số này sẽ được nhiều thỏa nguyện. Từ nửa đời người thì vận mạng đặng nên, lúc ấy tài lợi công danh thảy đều tấn phát.
		Nói chung, người có số lượng và số chỉ nầy lúc nhỏ làm ăn được phát đạt, tiền bạc dồi dào thì chớ vội mừng. Nếu ngược lại số phải vất vả long đong thì chớ vội trách. Bởi vì mạng số an bài, trung niên mới phát đạt. Nhưng cần nên tu tâm tích đức thì mới được vững bền.';
				$poetry = 'Khoan hoài được dịp cứ khoan hoài
		Chau mặt làm chi phải ủ mày
		Ba sáu tuổi trời thời vận đến
		Công danh tài lộc sẽ vào tay.';
				break;
			case 4.3:
				$message = 'Số này là người tánh rất thông minh, làm việc lỗi lạc hiên ngang gần với người sang quí. Một đời phước lộc tự trời định sẵn.
		Nói chung, người có số lượng và số chỉ nầy, thông minh hoạt bát, số được kẻ yêu người mến. Có quý nhân giúp đỡ. Đến năm 46 tuổi mới được giàu sang sung sướng. Số có con đông.';
				$poetry = 'Bẩm sanh tâm trí cực thông minh
		Lẫm liệt hiên nhang vượt bất bình
		Tài lộc sẵn dành trời đã định
		Quý nhân như có ở quanh mình.';
				break;
			case 4.4:
				$message = 'Phàm sự chi cũng bởi trời đem lại, chẳng cần cầu làm chi cho mệt, phước lộc về sau sẽ đặng hơn nhiều lúc khi xưa. tuy rằng lúc trẻ cung tài bạch khó đặng như ý, nhưng tới tuổi già đặng an nhàn.
		Nói chung, người có số lượng và số chỉ nầy phần đông sống cuộc đời cơ cực rày đây mai đó, không gần gũi cha mẹ hay anh em. Sống một cuộc đời tự lập. Đến năm 37 tuổi thì việc làm ăn mới được hanh thông, phát đạt.';
				$poetry = 'Muôn sự tự trời chớ gượng cầu
		Việc mình, mình biết chớ tìm đâu
		Bốn mươi tuổi lẻ nên cơ nghiệp
		Rủ sạch ưu tư hết khổ sầu.';
				break;
			case 4.5:
				$message = 'Số này phần công danh lợi lộc trước phải tân khổ, mà sau này cũng phải bôn ba, số hiếm hoi con cái vì khó nuôi, anh em cốt nhục cũng ít đặng phù trợ giúp sức.
		Nói chung, người có số lượng và số chỉ nầy bôn ba cho lắm cũng không có kết quả nào, phải đợi đến 40 tuổi thì mới tốt. Đường con cái thì quá hiếm hoi, vợ chồng thì rất hạnh phúc. Gia cảnh trong ấm ngoài êm, tiền bạc đầy đủ, con cái học hành đỗ đạt.';
				$poetry = 'Thử xem số mạng sẽ ra sao
		Đoán biết tương lai chẳng mấy giàu
		Con cái, gái trai nuôi thật khó
		Anh em ruột thịt biết phương nào.';
				break;
			case 4.6:
				$message = 'Số này đi đâu cũng đều đặn hanh thông, nhất là đổi họ dời nhà lại càng thạnh vượng. Ăn mặc đầy đủ tự số trời định. Từ nửa đời người cho đến lúc già đồng một mực trung bình.
		Nói chung, người có số lượng và số chỉ nầy được quan lộc, số giàu sang vinh hiển. Trong tay lắm kẻ hầu người hạ. Đường thê thiếp có đến hai vợ. Con cái học hành tiến phát. Sau nhờ đứa con đầu lòng.';
				$poetry = 'Nam bắc tây đông dạo khắp nơi
		Thay tên đổi họ tưởng là chơi
		Ai hay danh vọng càng thêm rạng
		Tài lộc miên miên hưởng trọn đời.';
				break;
			case 4.7:
				$message = 'Số này tính ra vượng về lúc tuổi già, vợ con phú quí vì vốn có cái phước sẵn như nước chảy lại.
		Nói chung, người có số lượng và số chỉ nầy ắt phải có chức vụ to, giàu sang, trọng vọng ít ai bì. Giòng họ đều thuộc vào hàng trưởng giả. Anh em hòa thuận.';
				$poetry = 'Bình sanh tổ phước chứa minh minh
		Số được an vui thắm thiết tình
		Vợ đẹp con ngoan nhà cửa rộng
		Một đời thẳng tắp bước tiến trình.';
				break;
			case 4.8:
				$message = 'Số này tuổi trẻ như lúc tuổi lớn, cũng chẳng đặng hưng vượng. Anh em họ hàng đều không đặng nhờ cậy giúp sức. Tới lúc già rồi mới đặng đôi phần an khương.
		Nói chung, người có số lượng và số chỉ nầy, số xa cha mẹ, huynh đệ không hòa thuận. Cuộc sống dời đổi luôn, công danh sự nghiệp chưa đạt thành. Mãi đến ngũ tuần mới có cơ thịnh vượng. Cần nên tu tâm trở về già mới được hưởng phước lộc.';
				$poetry = 'Cha mẹ anh em chẳng giúp mình
		Một thân quyết đạp gục đầu kình
		Bôn chôn rồi cũng hoàn bạch thủ
		Tuổi bốn mươi hơn, lộc thọ vinh.
		(bạch thủ = trắng tay; câu trên ý nói: "làm lụng cho lắm rồi cũng mất sạch")';
				break;
			case 4.9:
				$message = 'Số này suy ra có hậu phước lắm, tự tay gầy nên sự nghiệp vẻ vang gia đình. Người sang đều kính trọng. Một đời sung sướng.
		Nói chung, người có số lượng và số chỉ nầy, thường được quý nhân phò hộ. Trắng tay tạo nên sự nghiệp, nhưng đời sống cũng không được bền vững, khi thạnh khi suy. Âu đó chẳng qua là sự thử thách. Tuổi trung niên được nhiều người thương kẻ mến.';
				$poetry = 'Số mạng xem ra phước chẳng khinh
		Tự thân tự lập rạng môn đình
		Tôi đòi trai gái trong ngoài đủ
		Kẻ dạ người vâng thật hiển vinh.';
				break;
			case 5.0:
				$message = 'Số này hàng chỉ lao lực về đàng công danh tài lợi. Lúc nửa đời cũng có nhiều phen gặp phước lộc, tới lúc già tài tinh chiếu mạng sẽ đặng an nhàn.
		Nói chung, người có số lượng và số chỉ nầy thường hay suy nghĩ, làm ăn không được thịnh vượng. Cuộc đời ngoài 30 tuổi mới thấy phấn chấn phát đạt. Hào con hào của được tương vượng và bền lâu . Số nầy được hưởng phần hương quả.';
				$poetry = 'Hai chữ lợi danh nhọc xác thân
		Ba mươi tuổi lẻ mới nên phần
		Từ nay tài lộc đều hưng vượng
		Hòe quế chi lan sực nức sân.';
				break;
			case 5.1:
				$message = 'Số này một đời vinh hoa, mọi việc thảy đều tấn phát, chẳng cần lao lực, tự nhiên hanh thông. Anh em chú cháu đều đặn như ý, gia nghiệp và phước lộc đặng đầy đủ.
		Nói chung, người có số lượng và số chỉ nầy từ nhỏ đến lớn không làm gì động đến móng tay, mà vẫn có của để thụ hưởng. Căn kiếp an bài, cha mẹ giàu sang, số có quan quyền nên học ít mà hiểu nhiều. Sau nầy làm nên danh phận.';
				$poetry = 'Một đời sang quý vận hanh thông
		Chẳng hao tâm lực cũng thành công
		Anh em quyến thuộc đều hòa thuận
		Gia nghiệp truyền lưu nước một giòng.';
				break;
			case 5.2:
				$message = 'Số này trọn đời hanh thông, việc gì cũng hay, chẳng cần nhọc lòng mà tự nhiên yên ổn. Họ hàng cốt nhục thảy đều giúp sức, sự nghiệp hiển đạt.
		Nói chung, người có số lượng và số chỉ nầy chắc chắn quyền cao chức lớn, cuộc sống giàu sang. Anh em hòa thuận. Họ hàng nhờ cậy. Con cái sau nầy làm nên danh phận.';
				$poetry = 'Từ thuở mới sanh đã sướng rồi
		Tiền căn tích thiện phước do trời
		Tông môn rạng rỡ gia đường thạnh
		Tên tuổi lừng danh khắp mọi nơi.';
				break;
			case 5.3:
				$message = 'Số này xem ra khí lượng chơn thật, nghiệp nhà mà đặng phát đạt cũng ở trong đó. Phước lộc một đời có số định sẵn vinh hoa phú quí.
		Nói chung, người có số lượng và số chỉ nầy, tâm địa chơn chất hiền hòa. Căn mạng có quý nhân phò trợ, nên cho dù gặp việc dữ đến mấy cũng tai qua nạn khỏi. Công danh được thỏa mãn. Vợ chồng sống rất hạnh phúc, con cái đầy đủ.';
				$poetry = 'Cốt cách mai đây phước trạch dày
		Thi thơ kinh sử chẳng nhường ai
		Một đời an hưởng vui nhàn hạ
		Vàng ngọc sao bằng phước mới hay.';
				break;
			case 5.4:
				$message = 'Số này là người có tánh trung hậu và thanh cao, học hành minh mẫn ăn mặc phong túc, tự nhiên an ổn, chính là người có phước trên đời.
		Nói chung, người có số lượng và số chỉ nầy tánh tình liêm khiết ,không ham dời đổi. Tài lộc vượng và được vững bền. Con cái sau nầy làm nên danh phận.';
				$poetry = 'Số mạng không giàu ắt cũng sang
		Có tài tế thế trị an bang
		Kinh luân mã phúc thông minh sẵn
		Từ trẻ tới già số vẫn nhàn.';
				break;
			case 5.5:
				$message = 'Số này lúc trẻ hàng bôn ba trên đường danh lợi, nhưng uổng công phí sức mà thôi. Ngày kia, phước lộc sẽ tới như nước chảy lại, rồi tự nhiên phú quí vinh hiển.
		Nói chung, người có số lượng và số chỉ nầy phần đông sống một cuộc đời tự lập, anh em không nhờ cậy được nên phải lận đận. Đến năm 30 tuổi mới có cơ hội vùng vẫy làm ăn phát đạt, công danh sự nghiệp cũng được vững bền.';
				$poetry = 'Ra roi giục ngựa trải mười phương
		Từ thuở thanh xuân đủ mọi đường
		Đến tuổi trung niên tài lộc vượng
		Làm nên danh phận rạng gia hương.';
				break;
			case 5.6:
				$message = 'Số này suy ra là người lễ nghĩa thông thái, một đời phước lộc, nếm trải đủ mùi chua cay, nguồn tài lợi tới cuồn cuộn, an ổn và phong hậu.
		Nói chung, người có số lượng và số chỉ nầy tánh tình hiền hòa, anh em hòa thuận. Thường được của hoạnh tài, có quý nhân giúp đở. Sau nầy làm nên danh phận. Con cái đầy đặn.';
				$poetry = 'Làm người lễ nghĩa lại đoan trang
		Áo trắng giày rơm thấy cũng sang
		Cay đắng mùi đời đà nếm đủ
		Công danh tài lộc rạng môn quan.';
				break;
			case 5.7:
				$message = 'Số này phước lộc đầy dẫy, mọi sự hanh thông quang hiển, mẹ cha oai vọng chấn dương, người đều kính trọng.
		Nói chung, người có số lượng và số chỉ nầy có phần không cần phải lo cũng có cơm no, áo ấm. Vật chất tiền bạc đầy đủ. Mạng phước lộc thọ, nên sự nghiệp vững bền. Được kẻ trên người dưới mến chuộng.';
				$poetry = 'Muôn việc làm nên chẳng khó khăn
		Hiển vinh uy vệ phước đều tăng
		Dương danh hậu thế còn tên tuổi
		Tích đức tu nhơn có thiện căn.';
				break;
			case 5.8:
				$message = 'Số này là số bảng vàng áo gấm, quan cả khoa cao, phước lộc một đời tự nhiên đem lại, phú thọ đều có cả, danh lợi kiêm toàn.
		Nói chung, người có số lượng và số chỉ nầy thường là người có danh vọng, có chí lớn, một tay lập nên sự nghiệp, anh em không được hòa thuận. Đến năm 40 tuổi mới được thảnh thơi. Con cái sau nầy đỗ đạt làm nên danh phận.';
				$poetry = 'Một đời y lộc tự phong quang
		Danh lợi song toàn phúc thọ khang
		Ngọc đài tử bào ơn vũ lũ
		Tương lai hoạn lộ bước thênh thang.';
				break;
			case 5.9:
				$message = 'Suy ra số này là người diệu xảo không có thanh cốt, chắc hẳn tài cao học rộng có tài đậu khoa bảng, có mạng làm quan sang.
		Nói chung, người có số lượng và số chỉ nầy muốn làm gì cũng tốt cả, làm chơi ăn thiệt có quý nhân giúp đỡ tận tình, nên việc làm ăn được trôi chảy. Đến năm 34 tuổi thì tài lộc vượng. Con cái đầy đủ.';
				$poetry = 'Cốt cách thanh cao trí huệ minh
		Bảng vàng chắc chắn được nên danh
		Đường mây rộng mở chim tung cánh
		Yên ngựa đưa roi một bước thành.';
				break;
			case 6.0:
				$message = 'Số này tên đậu bảng vàng, lập nên công lớn, vinh vang tông tổ, điền sản phong túc, y lộc dư giả.
		Nói chung, người có số lượng và số chỉ nầy tánh hay nóng nảy, việc làm ăn không được thịnh vượng phải đợi đến 42 tuổi thì mới tốt đẹp, làm chơi ăn thiệt và có quý nhân giúp đỡ. Con cái trong gia đình được hòa thuận.';
				$poetry = 'Ngước trông lên bảng thấy đề danh
		Đèn sách lâu nay mộng đã thành
		Giúp nước giúp nhà tài sức trẻ
		Suốt đời vinh quý liệt oanh oanh.';
				break;
			case 6.1:
				$message = 'Số này tư chất thông minh, học hỏi rộng rãi, tự nhiên vinh diệu, tên đậu bảng vàng, dầu chẳng được quan sang chắc cũng là một nhà phú hộ.
		Nói chung, người có số lượng và số chỉ nầy, không thọ quyền chức cũng được giàu sang. Trí óc mở mang học một biết mười. Số ăn trên ngồi trước. Được kẻ đưa người đón, bạn bè thương mến, con cái sau nầy có đứa làm nên sự nghiệp.';
				$poetry = 'Tể tướng không, thì đại phú ông
		Kinh luân thơ phú thật tinh thông
		Sớm sanh trong chốn vàng nhung lụa
		Hưởng đức lâu dài đạo đức đồng.';
				break;
			case 6.2:
				$message = 'Số này phước lộc vô cùng, học giỏi làm nên, vinh hiển cha mẹ, đai vàng áo gấm, phú quí vinh hoa mọi đường đầy đủ.
		Nói chung, người có số lượng và số chỉ này tuy thông minh, học giỏi nhưng lận đận, từ nhỏ đến lớn sống cuộc đời vất vả rày đây mai đó mà chưa tạo dựng được sự nghiệp gì. Từ 45 tuổi mới có cơ hội tốt lập nên sự nghiệp, nửa đời sau được vinh hiển tột bực. Số không nhờ cậy được con.';
				$poetry = 'Một nhà nề nếp rạng thư hương
		Đẳng cấp công hầu, cận cửa vương
		Phúc đức lưu truyền nhờ tổ phụ
		Thê vinh, tử quý rạng môn đường.';
				break;
			case 6.3:
				$message = 'Số này là số đậu khoa cao, làm quan lớn, giàu sang cực phẩm, oai danh thiên hạ, phước lộc phi thường gia đình vinh hiển.
		Nói chung, người có số lượng và số chỉ nầy phần đông đều làm quan to chức lớn, tiền bạc dồi dào. Có quý nhân giúp đỡ. Về sau con cái học hành đỗ đạt. Đây là số đại cát.';
				$poetry = 'Nhứt đẳng triều trung một bực cao
		Tên đề bảng hổ dễ sai nào
		Tiến lên chín bệ ngôi trời cận
		Lui xuống phú gia định quốc hào.';
				break;
			case 6.4:
				$message = 'Số này phú quí vinh hao ít ai bì kịp, oai quyền lộc vị không kẻ sánh bằng, áo tía đai vàng ngôi cao chung đỉnh, trọn đời hạnh phúc.
		Nói chung, người có số lượng và số chỉ nầy phần đông đều làm quan to chức lớn, tiền bạc dồi dào. Có quý nhân giúp đỡ. Về sau con cái học hành đỗ đạt. Đây là số đại cát.';
				$poetry = 'Một tay nắm giữ trọn uy quyền
		Nhờ đức gia môn thế thế truyền
		Cây lành vun quén sanh hoa quý
		Trăm năm hạnh phúc ấy tiền duyên.';
				break;
			case 6.5:
				$message = 'Số này suy ra thì phước lộc chẳng nhỏ, tài cao giúp nước công cả yên dân, chức trọng trào đình giàu sang tột bật, vang danh thiên hạ.
		Nói chung, người có số lượng và số chỉ nầy phần đông đều làm quan to chức lớn, tiền bạc dồi dào. Có quý nhân giúp đỡ. Về sau con cái học hành đỗ đạt. Đây là số đại cát.';
				$poetry = 'Mạng này phúc đức kém chi đâu
		An quốc an dân cực phẩm cầu
		Phú quí vinh hoa nhà cửa rộng
		Nhứt hô bá ứng, vạn người hầu.';
				break;
			case 6.6:
				$message = 'Số này phú quí định sẵn tự trời, phước lộc hơn thiên hạ quan cao quyền trọng, châu báu đầy vơi, ấm phong thê tử.
		Nói chung, người có số lượng và số chỉ nầy phần đông đều làm quan to chức lớn, tiền bạc dồi dào. Có quý nhân giúp đỡ. Về sau con cái học hành đỗ đạt. Đây là số đại cát.';
				$poetry = 'Rương ngọc kho vàng có thiếu chi
		Trên đời phúc đức dễ ai bì
		Xét ra phú quí do trời định
		Sớm muộn rồi ra cũng kịp thì.';
				break;
			case 6.7:
				$message = 'Số này sanh ra tự nhiên có phước lớn, điền viên gia nghiệp thật hưng long, trọn đời phú quí vinh hoa, muôn việc hanh thông hoàn hảo.
				Nói chung, người có số lượng và số chỉ nầy phần đông đều làm quan to chức lớn, tiền bạc dồi dào. Có quý nhân giúp đỡ. Về sau con cái học hành đỗ đạt. Đây là số đại cát.';
				$poetry = 'Mạng số sanh ra đã thấy giàu
		Sống trong vàng lụa trước như sau
		Học hành đỗ đạt càng thêm quý
		Ngọc truốt vàng trau phẩm giá cao.';
				break;
			case 6.8:
				$message = 'Số này giàu sang tự trời ban, khỏi phải khó nhọc gia tự có muôn vàn, nhưng mười năm sau chẳng còn như hồi trước, căn cơ tổ nghiệp trôi đi như thuyền trên mặt nước sóng bão.
		Nói chung, người có số lượng và số chỉ nầy phần đông đều làm quan to chức lớn, tiền bạc dồi dào. Có quý nhân giúp đỡ. Về sau con cái học hành đỗ đạt. Đây là số đại cát.';
				$poetry = 'Mạng số trời sanh chớ gượng cầu
		Của tiền tổ nghiệp có bền đâu
		Mười năm đau khổ không khô lệ
		Một giấc nam kha mây cuốn mau.';
				break;
			case 6.9:
				$message = 'Số này là một vì sao y lộc ở nhân gian, một thân phú quí mọi người đều kính nể. Tóm lại là phước lộc do tự trời định, an hưởng vinh hoa trọn đời.
		Nói chung, người có số lượng và số chỉ nầy phần đông đều làm quan to chức lớn, tiền bạc dồi dào. Có quý nhân giúp đỡ. Về sau con cái học hành đỗ đạt. Đây là số đại cát.';
				$poetry = 'Một đời hưởng trọn phước thanh nhàn
		Dẫu chẳng được giàu số cũng sang
		Phong nhã hào hoa sao sáng tỏ
		Ca lâu tửu quán nét son vàng.';
				break;
			case 7.0:
				$message = 'Số này suy ra phước chẳng nhỏ, không cần phải sầu lo làm chi cho mệt nhọc, vì trời đã định sẵn y lộc phong danh, một đời vinh hiển giàu sang.
		Nói chung, người có số lượng và số chỉ nầy phần đông đều làm quan to chức lớn, tiền bạc dồi dào. Có quý nhân giúp đỡ. Về sau con cái học hành đỗ đạt. Đây là số đại cát.';
				$poetry = 'Mạng này trời đất đã an bày
		Lọ phải bôn ba khổ nhọc hoài
		Vinh hoa phú quí tầm tay với
		Lộc thọ miên miên sẽ có ngày.';
				break;
			case 7.1:
				$message = 'Số này sanh ra rất khác với người thường, công hầu khanh tướng đều đặn hoàn hảo, một đời tự nhiên có phước tiêu diêu khoái lạc cực phẩm hưng long.
		Nói chung, người có số lượng và số chỉ nầy phần đông đều làm quan to chức lớn, tiền bạc dồi dào. Có quý nhân giúp đỡ. Về sau con cái học hành đỗ đạt. Đây là số đại cát.';
				$poetry = 'Người sanh số mạng khác nhau xa
		Khanh tướng công hầu bởi phước nhà
		Một bước tới ngôi cao vời vợi
		Quyền uy sanh sát ở tay ta.';
				break;
		}
		
		$canxuong["w"]			=	$w;
		$canxuong["message"]	=	$message;
		$canxuong["poetry"]		=	$poetry;
		$canxuong["canchi"]		=	$lunar['canchi'];
		$canxuong["amlich"]		=	$dd.'/'.$mm.'/'.$yy;
		
		return $canxuong;
}

function checkDateX($d,$m,$y){
	switch($m)
	{
		case 2:
			if($d>29 || ($d==29 && !(($y%4==0 && $y%100!=0) || $y%400==0)))
					return false;
			break;
		case 4:
		case 6:
		case 9:
		case 11:
			if($d>30)
				return false;
			break;
	}
	if($y<1000)
		return false;
	return true;
}

function convertGiosinh($giosinh){
	$msg	=	"";
	switch($giosinh){
		case "1":
			$msg	=	"Giờ Tý (23h - 01h)";
		break;
		case "2":
			$msg	=	"Giờ Sửu (01h - 03h)";
		break;
		case "3":
			$msg	=	"Giờ Dần (03h - 05h)";
		break;
		case "4":
			$msg	=	"Giờ Mẹo (05h - 07h)";
		break;
		case "5":
			$msg	=	"Giờ Thìn (07h - 09h)";
		break;
		case "6":
			$msg	=	"Giờ Tỵ (09h - 11h)";
		break;
		case "7":
			$msg	=	"Giờ Ngọ (11h - 13h)";
		break;
		case "8":
			$msg	=	"Giờ Mùi (13h - 15h)";
		break;
		case "9":
			$msg	=	"Giờ Thân (15h - 17h)";
		break;
		case "10":
			$msg	=	"Giờ Dậu (17h - 19h)";
		break;
		case "11":
			$msg	=	"Giờ Tuất (19h - 21h)";
		break;
		case "12":
			$msg	=	"Giờ Hợi (21h - 23h)";
		break;
	}
	return $msg;
}

function bigInt2Str($num){
	return number_format($num,0, '', '');
}

function jdFromDate($dd, $mm, $yy) {
	$a = floor((14 - $mm) / 12);
	$y = $yy + 4800 - $a;
	$m = $mm + 12 * $a - 3;
	$jd = $dd + floor((153 * $m + 2) / 5) + 365 * $y + floor($y / 4) - floor($y / 100) + floor($y / 400) - 32045;
	if ($jd < 2299161) {
		$jd = $dd + floor((153* $m + 2)/5) + 365 * $y + floor($y / 4) - 32083;
	}
	return $jd;
}

function jdToDate($jd) {
	if ($jd > 2299160) { // After 5/10/1582, Gregorian calendar
		$a = $jd + 32044;
		$b = floor((4*$a+3)/146097);
		$c = $a - floor(($b*146097)/4);
	} else {
		$b = 0;
		$c = $jd + 32082;
	}
	$d = floor((4*$c+3)/1461);
	$e = $c - floor((1461*$d)/4);
	$m = floor((5*$e+2)/153);
	$day = $e - floor((153*$m+2)/5) + 1;
	$month = $m + 3 - 12*floor($m/10);
	$year = $b*100 + $d - 4800 + floor($m/10);
	//echo "day = $day, month = $month, year = $year\n";
	return array($day, $month, $year);
}

function getNewMoonDay($k, $timeZone) {
	$T = $k/1236.85; // Time in Julian centuries from 1900 January 0.5
	$T2 = $T * $T;
	$T3 = $T2 * $T;
	$dr = M_PI/180;
	$Jd1 = 2415020.75933 + 29.53058868*$k + 0.0001178*$T2 - 0.000000155*$T3;
	$Jd1 = $Jd1 + 0.00033*sin((166.56 + 132.87*$T - 0.009173*$T2)*$dr); // Mean new moon
	$M = 359.2242 + 29.10535608*$k - 0.0000333*$T2 - 0.00000347*$T3; // Sun's mean anomaly
	$Mpr = 306.0253 + 385.81691806*$k + 0.0107306*$T2 + 0.00001236*$T3; // Moon's mean anomaly
	$F = 21.2964 + 390.67050646*$k - 0.0016528*$T2 - 0.00000239*$T3; // Moon's argument of latitude
	$C1=(0.1734 - 0.000393*$T)*sin($M*$dr) + 0.0021*sin(2*$dr*$M);
	$C1 = $C1 - 0.4068*sin($Mpr*$dr) + 0.0161*sin($dr*2*$Mpr);
	$C1 = $C1 - 0.0004*sin($dr*3*$Mpr);
	$C1 = $C1 + 0.0104*sin($dr*2*$F) - 0.0051*sin($dr*($M+$Mpr));
	$C1 = $C1 - 0.0074*sin($dr*($M-$Mpr)) + 0.0004*sin($dr*(2*$F+$M));
	$C1 = $C1 - 0.0004*sin($dr*(2*$F-$M)) - 0.0006*sin($dr*(2*$F+$Mpr));
	$C1 = $C1 + 0.0010*sin($dr*(2*$F-$Mpr)) + 0.0005*sin($dr*(2*$Mpr+$M));
	if ($T < -11) {
		$deltat= 0.001 + 0.000839*$T + 0.0002261*$T2 - 0.00000845*$T3 - 0.000000081*$T*$T3;
	} else {
		$deltat= -0.000278 + 0.000265*$T + 0.000262*$T2;
	};
	$JdNew = $Jd1 + $C1 - $deltat;
	//echo "JdNew = $JdNew\n";
	return floor($JdNew + 0.5 + $timeZone/24);
}

function getSunLongitude($jdn, $timeZone) {
	$T = ($jdn - 2451545.5 - $timeZone/24) / 36525; // Time in Julian centuries from 2000-01-01 12:00:00 GMT
	$T2 = $T * $T;
	$dr = M_PI/180; // degree to radian
	$M = 357.52910 + 35999.05030*$T - 0.0001559*$T2 - 0.00000048*$T*$T2; // mean anomaly, degree
	$L0 = 280.46645 + 36000.76983*$T + 0.0003032*$T2; // mean longitude, degree
	$DL = (1.914600 - 0.004817*$T - 0.000014*$T2)*sin($dr*$M);
	$DL = $DL + (0.019993 - 0.000101*$T)*sin($dr*2*$M) + 0.000290*sin($dr*3*$M);
	$L = $L0 + $DL; // true longitude, degree
	//echo "\ndr = $dr, M = $M, T = $T, DL = $DL, L = $L, L0 = $L0\n";
	// obtain apparent longitude by correcting for nutation and aberration
	$omega = 125.04 - 1934.136 * T;
	$L = $L - 0.00569 - 0.00478 * Math.sin($omega * $dr);
	$L = $L*$dr;
	$L = $L - M_PI*2*(floor($L/(M_PI*2))); // Normalize to (0, 2*PI)
	return floor($L/M_PI*6);
}

function getLunarMonth11($yy, $timeZone) {
	$off = jdFromDate(31, 12, $yy) - 2415021;
	$k = floor($off / 29.530588853);
	$nm = getNewMoonDay($k, $timeZone);
	$sunLong = getSunLongitude($nm, $timeZone); // sun longitude at local midnight
	if ($sunLong >= 9) {
		$nm = getNewMoonDay($k-1, $timeZone);
	}
	return $nm;
}

function getLeapMonthOffset($a11, $timeZone) {
	$k = floor(($a11 - 2415021.076998695) / 29.530588853 + 0.5);
	$last = 0;
	$i = 1; // We start with the month following lunar month 11
	$arc = getSunLongitude(getNewMoonDay($k + $i, $timeZone), $timeZone);
	do {
		$last = $arc;
		$i = $i + 1;
		$arc = getSunLongitude(getNewMoonDay($k + $i, $timeZone), $timeZone);
	} while ($arc != $last && $i < 14);
	return $i - 1;
}

/* Comvert solar date dd/mm/yyyy to the corresponding lunar date */
function convertSolar2Lunar($dd, $mm, $yy, $timeZone) {
	$dayNumber = jdFromDate($dd, $mm, $yy);
	$k = floor(($dayNumber - 2415021.076998695) / 29.530588853);
	$monthStart = getNewMoonDay($k+1, $timeZone);
	if ($monthStart > $dayNumber) {
		$monthStart = getNewMoonDay($k, $timeZone);
	}
	$a11 = getLunarMonth11($yy, $timeZone);
	$b11 = $a11;
	if ($a11 >= $monthStart) {
		$lunarYear = $yy;
		$a11 = getLunarMonth11($yy-1, $timeZone);
	} else {
		$lunarYear = $yy+1;
		$b11 = getLunarMonth11($yy+1, $timeZone);
	}
	$lunarDay = $dayNumber - $monthStart + 1;
	$diff = floor(($monthStart - $a11)/29);
	$lunarLeap = 0;
	$lunarMonth = $diff + 11;
	if ($b11 - $a11 > 365) {
		$leapMonthDiff = getLeapMonthOffset($a11, $timeZone);
		if ($diff >= $leapMonthDiff) {
			$lunarMonth = $diff + 10;
			if ($diff == $leapMonthDiff) {
				$lunarLeap = 1;
			}
		}
	}
	if ($lunarMonth > 12) {
		$lunarMonth = $lunarMonth - 12;
	}
	if ($lunarMonth >= 11 && $diff < 4) {
		$lunarYear -= 1;
	}
	$acan = array("Giáp", "Ất", "Bính", "Đinh", "Mậu", "Kỷ", "Canh", "Tân", "Nhâm", "Quý");
	$achi = array("Tý", "Sửu", "Dần", "Mão", "Thìn", "Tỵ", "Ngọ", "Mùi", "Thân", "Dậu", "Tuất", "Hợi");
	$can = $acan[($lunarYear+6)%10];
	$chi = $achi[($lunarYear+8)%12];
	return array('canchi' => $can . " " . $chi, 'ngaysinh' => "$lunarDay/$lunarMonth/$lunarYear", 'nhuan' => $lunarLeap);
}
?>