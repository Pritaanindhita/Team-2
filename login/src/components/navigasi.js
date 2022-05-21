import React from "react";
import nav from "./nav.png";

console.log(nav);

class MyNav extends React.Component{
    render(){
        return(
            <div class="sidebar">
                <div class="logo_content">
                    <div class="logo">
                        <i class='bx bxs-shield-alt-2' ></i>
                        <div class="logo_name">E-Safety</div>
                    </div>
                    <i class='bx bx-menu' id="btn"></i>
                </div>
                <ul class="nav_list">
                    <li>
                        <a href="#">
                            <i class='bx bx-grid-alt'></i>
                            <span class="links_name">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class='bx bx-grid-alt'></i>
                            <span class="links_name">Inspeksi</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class='bx bx-grid-alt'></i>
                            <span class="links_name">Laporan</span>
                        </a>
                    </li>
                </ul>
                <div class="mt-5 mb-5">
                    <img src={nav}/>
                </div>
            </div>
        );
    };
}

export default MyNav