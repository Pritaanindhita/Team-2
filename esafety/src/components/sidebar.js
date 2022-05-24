import React from "react";
import Use_Script from "./useScript";

const sidebar = () => {
    return (
        <>
        <div class="menu-btn">
            <i class="fas fa-bars"></i>
        </div>
        <div class="side-bar">
            <div class="close-btn">
                <i class="fas fa-times"></i>
            </div>
            <div class="menu">
                <div class="logo_content">
                    <div class="logo">
                        <i class="fas fa-desktop"></i>
                    <div class="logo_name">E-Safety</div>
                </div>
            </div>
            <div class="item"><a href="#"><i class="fas fa-desktop"></i>Dashboard</a></div>
            <div class="item">
                <a class="sub-btn"><i class="fas fa-table"></i>Tables<i class="fas fa-angle-right dropdown"></i></a>
                <div class="sub-menu">
                    <a href="#" class="sub-item">Sub Item 01</a>
                    <a href="#" class="sub-item">Sub Item 02</a>
                    <a href="#" class="sub-item">Sub Item 03</a>
                </div>
            </div>
            <div class="item"><a href="#"><i class="fas fa-th"></i>Forms</a></div>
                <div class="item">
                    <a class="sub-btn"><i class="fas fa-cogs"></i>Settings<i class="fas fa-angle-right dropdown"></i></a>
                <div class="sub-menu">
                    <a href="#" class="sub-item">Sub Item 01</a>
                    <a href="#" class="sub-item">Sub Item 02</a>
                </div>
            </div>
            <div class="item"><a href="#"><i class="fas fa-info-circle"></i>About</a></div>
        </div>
    </div>
   <section class="main">
   </section>
   <Use_Script/>
   </>

    )
}

export default sidebar