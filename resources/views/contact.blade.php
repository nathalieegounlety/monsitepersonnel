@extends('include.layout')
@section('container')
    <div class="shadow p-3 mb-5  rounded" style="min-height:148px; background-color:#FFEAF1; "><br><br>

        <strong style="font-size:35px; padding:100px; margin:50px; ">CONTACTEZ-MOI</strong>

    </div>
    <div style="min-height: 90px;">

    </div>
    <p style="color: rgb(255, 0, 91); font-weight:bold; font-size:35px; text-align:center; margin-bottom: 20px;">

        Entrer en contact avec moi

    </p><br>
    <p style="font-size: 25px; text-align:center;">
        <em>
            Vous pouvez nous contactez via les informations ci-après:
        </em>

    </p>

    <div style="margin:100px;">
        <div class="col">
            <div class="row">
                <div class="col-lg-4">
                    <tr>
                        <td>
                            <i class="bi bi-house-heart-fill cercle" style="color: #ffffff; font-size:30px;"></i>

                        </td>
                        <td>
                            <p class="card-title"
                                style="color: #000000; font-weight:bold; margin:-20px; float:left; margin-left:90px; font-size:25px; ">
                                ADRESSE

                            </p>
                            <p class="card-title"
                                style="color: #000000;  margin:-10px; float:left; margin-left:90px; font-size:20px; ">
                                DOWA DEDOME/Porto-Novo</p>


                        </td>
                    </tr>

                </div>
                <div class="col-lg-4">
                    <tr>
                        <td>
                            <i class="bi bi-envelope-fill cercle" style="color: #ffffff; font-size:30px; "></i>

                        </td>
                        <td>
                            <p class="card-title"
                                style="color: #000000; font-weight:bold; margin:-16px; float:right; margin-right:235px; font-size:25px; ">
                                EMAIL

                            </p>
                            <p class="card-title"
                                style="color: #000000;  margin:-35px; float:left; margin-left:90px; font-size:20px; "><br>
                                E-mail:nathalie@digiweb.bj
                            </p>


                        </td>
                    </tr>

                </div>
                <div class="col-lg-4">
                    <tr>
                        <td>
                            <i class="bi bi-telephone-fill cercle" style="color: #ffffff; font-size:30px;"></i>

                        </td>
                        <td>
                            <p class="card-title"
                                style="color: #000000; font-weight:bold; margin:-20px; float:left; margin-left:90px; font-size:25px; ">
                                TELEPHONE

                            </p>
                            <p class="card-title"
                                style="color: #000000;  margin:-10px; float:left; margin-left:90px; font-size:20px; ">
                                +229 62 22 88 11 / 99 12 96 56</p>


                        </td>
                    </tr>

                </div>

            </div>
        </div>
    </div>
    <div>
        <div class="col">
            <div class="row">
                <div class="col-lg-6" style="min-height:700px; background-color:#f6f0f0; ">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d507403.2406807795!2d2.0362092656249886!3d6.510567999999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b51020e1f99b3%3A0x6c554e738e6df4d4!2sBoulangerie%20dowa%20dedome!5e0!3m2!1sfr!2sbj!4v1665487639713!5m2!1sfr!2sbj"
                        width="720" height="900" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
                <div class="col-lg-6" style="min-height:900px; background-color:#f6f0f0; "><br><br>
                    <form method="POST" action="{{ route('contact') }}">
                        @csrf
                        <p style="font-size: 30px; font-weight:bold; margin-left:80px; ">Envoyer moi un message</p><br>
                        <label for="name">
                            <p style="font-size:23px; margin-left:80px;"> Nom et Prénom(s) </p>
                        </label>
                        <div class="form-floating mb-3">
                            <input type="text" name="name" class="form-control" id="name"
                                style="height: 80px; width:500px; margin-left:80px;">

                        </div><br>
                        <label for="mail">
                            <p style="font-size:23px; margin-left:80px;"> E-mail </p>
                        </label>
                        <div class="form-floating mb-3">
                            <input type="email" name="mail" class="form-control" id="mail"
                                style="height: 80px; width:500px; margin-left:80px;">

                        </div><br>
                        <label for="message">
                            <p style="font-size:23px; margin-left:80px;"> Message </p>
                        </label>
                        <div class="form-floating mb-3">
                            <input type="text" name="message" class="form-control" id="message"
                                style="height: 180px; width:500px; margin-left:80px;">

                        </div><br><br>

                        <button class="buttom button1" type="submit"
                            style="height: 70px; width:500px; margin-left:80px; font-size:30px; font-weight:bold; text-align:center; padding:10px;">ENVOYER</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
    
@endsection
