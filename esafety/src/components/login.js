import React from "react";
import gambar from './assets/login.png';
import Form_Login from "./form_login";

console.log(gambar);

const Login = () => {
    return (
        <div class="row g-0 h-100">
            <div class="col-xl-12">
                <div class="row g-0 text-white">
                    <div class="col-lg-6">
                        <div class="card-body p-md-5 mx-md-4">
                            <div class="text-center">
                                <h1><b>E-SAFETY BARATA</b></h1>
                                <h5>Advancement Through Technology</h5>
                                <img src={gambar} width="80%" class="img-fluid mx-auto d-block mt-5"/>
                            </div>
                        </div>
                    </div>
                    <Form_Login/>
                </div>
            </div>
        </div>
    )
}

export default Login