
@extends("usertheme")
@section("content")
<style>
body{
    background: -webkit-linear-gradient(left, #0072ff, #00c6ff);
}
.contact-form{
    background: #fff;
    margin-top: 10%;
    margin-bottom: 5%;
    width: 70%;
}
.contact-form .form-control{
    border-radius:1rem;
}
.contact-image{
    text-align: center;
}
.contact-image img{
    border-radius: 6rem;
    width: 11%;
    margin-top: -3%;
    transform: rotate(29deg);
}
.contact-form form{
    padding: 14%;
}
.contact-form form .row{
    margin-bottom: -7%;
}
.contact-form h3{
    margin-bottom: 8%;
    margin-top: -10%;
    text-align: center;
    color: #0062cc;
}
.contact-form .btnContact {
    width: 50%;
    border: none;
    border-radius: 1rem;
    padding: 1.5%;
    background: #dc3545;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
}
.btnContactSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    color: #fff;
    background-color: #0062cc;
    border: none;
    cursor: pointer;
}
</style>

<br>
<br>

<section>
<div class="container contact-form">
            <div class="contact-image">
                <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
            </div>
            <form action="/contacts" method="post">
{{csrf_field()}}
                <h3>Drop Us a Message</h3>
               <div class="row">
                    <div class="col-md-12">
                       
                    
                        <div class="form-group">
                        <div class="form-group">
                            <textarea name="Message" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                            <span class="text-danger">@error('Message'){{$message}} @enderror  </span>
                        </div>
                        
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                        <button class="btnContact">Send Message</button>
                            <br>
                            <br>
                        </div>
                        @if(Session::get('success'))
            <div class="alert alert-success mt-4" style="font-size: 20px;color:black;font-family: poppins;">
            {{Session::get('success')}}
            </div>
            @endif
                    </div>
                    
                    <div class="col-md-6">
                        
                    </div>
                </div>
            </form>
            
</div>
</section>
            @endsection









