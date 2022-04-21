<div style="margin: 0 auto; padding: 15px; width: 600px; font-family: Arial, Helvetica, sans-serif">
    <div style="text-align: center">
        <h2 style="font-size: 20px; font-weight: 800; background: -webkit-linear-gradient(45deg, #09009f, #00ff95 80%); color: #fff">
            Cảm ơn bạn đã đăng ký nhận thông tin</h2>
        <h3>Xin chào {{$name}}</h3>
    </div>
    <h2 style="color: #2E6E9E; font-weight: 400; margin-bottom: 20px;">Giới thiệu</h2>
    <div style="text-align: justify">
        <p>
            <strong>
                Công Ty TNHH Giải Pháp Công Nghệ Thông Tin & Truyền Thông Hoàng Khang (Hoang Khang Incotech) xin gửi đến
                Quý
                khách hàng đã – đang và sẽ là niềm tự hào của công ty Hoàng Khang lời chúc sức khỏe và lời chào trân
                trọng.
            </strong>
        </p>
        <p>Dưới đây là thông tin quý khách đã đăng ký:</p>
    </div>
    <table border="1">
        <tr>
            <td>Name:</td>
            <td>{{$name}}</td>
        </tr>
        <tr>
            <td>Email:</td>
            <td>{{$request->email}}</td>
        </tr>
        <tr>
            <td>Phone:</td>
            <td>{{$request->phone}}</td>
        </tr>
        <tr>
            <td>Position:</td>
            <td>{{$request->position}}</td>
        </tr>
        <tr>
            <td>Subject:</td>
            <td>{{$request->subject}}</td>
        </tr>
        <tr>
            <td>Messages:</td>
            <td>{{$request->messages}}</td>
        </tr>
    </table>
    <p style="text-align: right;">Trân trọng kính chào!</p>
    <p style="text-align: right;">Công ty Hoang Khang Incotech</p>
</div>
