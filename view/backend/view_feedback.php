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
                            <form method="post" action="admin.php?controller=add_feedback">

                            <div class="form-group">
                                <div class="key">
                                <span class="required" style="color: red">*</span>
                                Tên của bạn
                                </div>
                                <div class="col-md-9">
                                <input id="txtTitle" class="NormalTextBox" type="text" maxlength="255" name="username">
                                <span id="cphMain_ctl00_ctl00_rfvUsername" style="display:none;">(*)</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="key">
                                <span class="required" style="color: red">*</span>
                                Tên sản phẩm
                                </div>
                                <div class="col-md-9">
                                <select name="id_product">
                                    <?php $product=$this->model->get_all("select * from product");
                                        foreach ($product as $rows) {
                                     ?>
                                    <option <?php if(isset($arr->id)&&$arr->id_product==$rows->id){ ?> selected <?php } ?> value="<?php echo $rows->id?>"><?php echo $rows->name ?></option>
                                <?php } ?>
                                </select>
                            </div>
                            </div>
 
                            <div class="form-group">
                                <div class="key">
                                <span class="required" style="color: red">*</span>
                                Tiêu đề
                                </div>
                                <div class="col-md-9">
                                <input id="txtTitle" class="NormalTextBox" type="text" maxlength="255" name="subject">
                                <span id="cphMain_ctl00_ctl00_rfvSubject" style="display:none;">(*)</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="key">
                                <span class="required" style="color: red">*</span>
                                Nội dung
                                </div>
                                <div class="col-md-9">
                                <textarea id="txtContent" class="NormalTextBox" style="height:80px;" cols="50" rows="2" name="content"></textarea>
                                <span id="cphMain_ctl00_ctl00_rfvContactContent" style="display:none;">(*)</span>
                                </div>
                            </div> 
                            <div class="form-group">
                                <div class="key"> </div>
                                <div class="col-md-9">
                                <input id="btnSend" class="Button" type="submit" style="width:80px;"  value="Gửi" name="btnSend">
                                <input id="btnReset" class="Button" type="submit" style="width:80px;" value="Nhập lại" name="btnReset">
                                </div>
                            </div>
                           
                        </form>
                        </div>
                    </div>
                </div>
                <div class="defaultFooter contact-footer"></div>
            </div> 