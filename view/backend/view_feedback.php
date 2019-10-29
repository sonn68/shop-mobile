<div id="cphMain_ctl00_ContentPane" class="center center_right">
            	<div class="defaultContent contact-content"> 
                    <div id="cphMain_ctl00_ctl00_plContent" class="contact contactInput" style="width:100%;">
                        <div class="contact-title">
                            <h2 class="title">Thông tin phản hồi</h2>
                        </div>
                        <div class="contact-info">
                            <div class="clear contactMsg">
                                 Xin vui lòng điền các yêu cầu vào form dưới đây và gửi cho chúng tôi. Chúng tôi sẽ trả lời bạn ngay sau khi nhận được.
                                <br/>
                                <span>Xin chân thành cảm ơn!</span>
                            </div>
                            <div style="color: red"><?php echo isset($tb)?$tb:""; ?></div>
                            <form method="post" action="index.php?controller=add_contact&act=do_add">
                             
                            <div class="clear">
                                <div class="key">
                                <span class="required">*</span>
                                Địa chỉ
                                </div>
                                <div class="value">
                                <input id="txtContactAddress" class="NormalTextBox" type="text" maxlength="250" name="c_adress">
                                <span id="cphMain_ctl00_ctl00_rfvContactAddress" style="display:none;">(*)</span>
                                </div>
                            </div>  
                            <div class="clear">
                                <div class="key">
                                <span class="required">*</span>
                                Tiêu đề
                                </div>
                                <div class="value">
                                <input id="txtTitle" class="NormalTextBox" type="text" maxlength="255" name="subject">
                                <span id="cphMain_ctl00_ctl00_rfvTitle" style="display:none;">(*)</span>
                                </div>
                            </div>
                            <div class="clear">
                                <div class="key">
                                <span class="required">*</span>
                                Nội dung
                                </div>
                                <div class="value">
                                <textarea id="txtContent" class="NormalTextBox" style="height:80px;" cols="20" rows="2" name="content"></textarea>
                                <span id="cphMain_ctl00_ctl00_rfvContactContent" style="display:none;">(*)</span>
                                </div>
                            </div>
                            <!-- <div class="clear">
                                <div class="key">
                                <span class="required">*</span>
                                Mã xác nhận
                                </div>
                                <div class="value">
                                <div style="float: left; margin-bottom: 0px;">
                                <input id="txtMangaunhien" class="NormalTextBox" type="text" style="width:70px;" maxlength="6" name="c_maxacnhan">
                                </div> 
                                <div style="float: left; margin: 0px 0px 0px 10px;">
                                <a id="resetCapcha" href="#">
                                <img alt="" style="height: 21px;" src="image/refesh7.png">
                                </a>
                                </div>
                                <div style="clear: both;"></div>
                                <span style="color: Red;"> </span>
                                </div>
                            </div> -->
                            <div class="clear">
                                <div class="key"> </div>
                                <div class="value">
                                <input id="btnSend" class="Button" type="submit" style="width:80px;"  value="Gửi" name="btnSend">
                                <input id="btnReset" class="Button" type="submit" style="width:80px;" value="Nhập lại" name="btnReset">
                                </div>
                            </div>
                            <div class="clear"> </div>
                        </form>
                        </div>
                    </div>
                </div>
                <div class="defaultFooter contact-footer"></div>
            </div> 