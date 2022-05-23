import React from "react";

const form_login = () => {
    return (
        <div class="col-lg-6 g-0 login-form">
            <div class="container">
                <div class="card rounded-3 text-black py-5 border-light">
                    <div class="row mb-3">		
                        <h3><b>K3LH LOGIN</b></h3>
                    </div>
                    <form class="mt-5 mb-5 mx-5">
                        <div class="form-group">
                            <div class="row mt-2">
                                <div class="col-sm-2 form-label">
                                    <label>Username</label>
                                </div>
                            </div>
                            <div class="field-input rounded">                            
                                <input type="email" id="formEmail" class="form-control"placeholder="Username"/>
                                <span><i class="fas fa-user-check"></i></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row mt-2">
                                <div class="col-sm-2 form-label">
                                    <label>Password</label>
                                </div>
                            </div>
                            <div class="field-input mb-5 rounded">                            
                                <input type="password" id="formPassword" class="form-control"placeholder="Password"/>
                                <span><i class="fas fa-eye" onclick="passFunction()"></i></span>
                            </div>
                        </div>
                        <div class="log-button d-grid">
                            <button class="btn text-light" type="button">Login</button>
                        </div>
                    </form>
                    <div class="copyright container">		
                        <h5><b>Develop by</b></h5>
                        <h5><b>Intern Tim 2 - PT Barata Indonesia 2022</b></h5>
                    </div>
                </div>
            </div>
        </div>
    )
}
export default form_login