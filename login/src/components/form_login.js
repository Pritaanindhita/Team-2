import React from "react";

const form_login = () => {
    return (
        <div class="col-lg-6 login-form">
            <div class="container">
                <div class="card rounded-3 text-black mt-5 mb-5 py-5 border-light">
                    <div class="row justify-content-center mb-3">		
                        <h4><b>K3LH LOGIN</b></h4>
                    </div>
                    <form>
                        <div class="form-outline ml-5 mr-5 mb-3">
                            <label class="form-label" for="formEmail"> Username</label>
                            <input type="email" id="formEmail" class="form-control mx-auto" placeholder="Masukkan username" />
                        </div>
                        <div class="form-outline ml-5 mr-5 mb-3">
                            <label class="form-label" for="formPassword"> Password</label>
                            <input type="password" id="formPassword" class="form-control" placeholder="******" />
                        </div>
                        <div class="text-center ml-5 mr-5 mb-3">
                            <button class="btn btn-block text-white" type="button">Login</button>
                        </div>
                    </form>
                    <div class="container">		
                        <h5>Develop by</h5>
                        <h5>Intern Tim 2 - PT Barata Indonesia 2022</h5>
                    </div>
                </div>
            </div>
        </div>
    )
}
export default form_login