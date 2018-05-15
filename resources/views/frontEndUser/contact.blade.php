@extends('frontEndUser.layout.default')
@section('contact')
	<br>
	<br>
	<div class="container">
	    <div class="row">
	        <div class="col-md-8">
	            <div class="well well-sm">
	                <form>
	                <div class="row">
	                    <div class="col-md-6">
	                        <div class="form-group">
	                            <label for="name">
	                                Họ tên</label>
	                            <input type="text" class="form-control" id="name" placeholder="Vui lòng điền họ tên" required="required" />
	                        </div>
	                        <div class="form-group">
	                            <label for="subject">
	                                Số điện thoại</label>
	                            <input type="text" class="form-control" id="phone-number" placeholder="Vui lòng nhập số điện thoại" required="required" />
	                        </div>
	                        <div class="form-group">
	                            <label for="email">
	                                Email</label>
	                            <div class="input-group">
	                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
	                                </span>
	                                <input type="email" class="form-control" id="email" placeholder="Vui lòng nhập Email" required="required" /></div>
	                        </div>
	                        
	                    </div>
	                    <div class="col-md-6">
	                        <div class="form-group">
	                            <label for="name">
	                                Tin nhắn</label>
	                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
	                                placeholder="Message"></textarea>
	                        </div>
	                    </div>
	                    <div class="col-md-12">
	                        <button type="submit" class=" btn-primary pull-right" id="btnContactUs">
	                            Gửi tin nhắn</button>
	                    </div>
	                </div>
	                </form>
	            </div>
	        </div>
	        <div class="col-md-4">
	            <form>
	            <legend style="font-weight: 700;"><span class="glyphicon glyphicon-globe"></span> Slux Service</legend>
	            <address>
	                <br>
	                <p style="color: #000; font-size: 15px;"><span class="glyphicon glyphicon-map-marker" style="color: blue;"></span>    39, Võ Văn Dũng, Ô Chợ Dừa, Đống Đa, Hà Nội</p>
	                <p style="color: #000; font-size: 15px;"><span class="glyphicon glyphicon-earphone" style="color: blue;"></span> 02462627639</p>
	                <p style="color: #000; font-size: 15px;"><span class="glyphicon glyphicon-envelope" style="color: blue;"></span>    hotro@cuong.vn</p>
	                <p style="color: #000; font-size: 15px;"><span class="glyphicon glyphicon-time" style="color: blue;"></span>    08 giờ 30 đến 21 giờ tất cả các ngày trong tuần</p>
	            </address>
	            
	            </form>
	        </div>
	    </div>
	</div>
	<br>
	<br>
@endsection()