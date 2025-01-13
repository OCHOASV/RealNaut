<?php
    echo '
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Menú Responsivo - v4</title>

            <!-- Font Awesome -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

            <style>
                /* Global */
                :root {
                    /* ===== Colors ===== */
                    --body-bg-color: #f4f4f4;
                    --menu-bg-color: #000;
                    --menu-hover-color: #fec14b;
                    --menu-text-color: #fff;
                    --submenu-bg-color: #242729;
                }
                * {
                    margin: 0;
                    padding: 0;
                    box-sizing: border-box;
                    font-family: Arial, sans-serif;
                }
                body {
                    background-color: var(--body-bg-color);
                }
                header {
                    width: 100%;
                    padding: 10px 20px;
                    background-color: var(--menu-bg-color);
                    position: fixed;
                    top: 0;
                    left: 0;
                    z-index: 1000;
                }.menu__container {
                    max-width: 1200px;
                    margin: 0 auto;
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                }.menu {
                    color: white;
                    display: flex;
                    justify-content: flex-start;
                    align-items: center;
                    width: 100%;
                }
                .menu__logo {
                    font-size: 30px;
                    font-weight: bold;
                    color: white;
                    margin-right: 10px;
                    display: flex;
                    align-items: center;
                }
                .menu__logo i {
                    font-size: 35px;
                }
                .menu__company-name {
                    font-size: 18px;
                    color: white;
                }
                .menu__list {
                    display: flex;
                    justify-content: flex-start;
                    width: 100%;
                    align-items: center;
                }
                .menu__item {
                    position: relative;
                    padding: 10px 20px;
                    list-style-type: none;
                    display: flex;
                    align-items: center;
                    width: auto;
                }
                .menu__link {
                    color: white;
                    text-decoration: none;
                    font-size: 16px;
                    padding: 5px 10px;
                    display: block;
                    transition: all 0.3s ease;
                    width: auto;
                }.menu__item.active .menu__link {
                    color: var(--menu-hover-color);
                    border-bottom: 3px solid var(--menu-hover-color);
                }
                .menu__sub-list {
                    display: none;
                    position: absolute;
                    background-color: var(--submenu-bg-color);
                    top: 100%;
                    left: 0;
                    width: 100%;
                    flex-direction: column;
                    padding: 10px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
                    border-radius: 5px;
                }
                .menu__sub-item {
                    padding: 10px;
                    display: inline-flex;
                    width: 100%;
                }
                .menu__sub-link {
                    color: white;
                    text-decoration: none;
                }
                .menu__sub-item:hover {
                    background-color: var(--menu-hover-color);
                }
                .menu__sub-link:hover {
                    color: black;
                }
                .menu__divider {
                    width: 1px;
                    height: 30px;
                    background-color: grey;
                    margin: 0 15px;
                }
                .menu__right-links {
                    display: flex;
                    justify-content: flex-end;
                    align-items: center;
                }
                .menu__item__right a {
                    display: inline-flex;
                }
                .menu__item__right a i {
                    margin-right: 5px;
                }
                .menu__hamburger {
                    display: none;
                    font-size: 30px;
                    cursor: pointer;
                    color: white;
                }
                .menu__item:hover .menu__sub-list {
                    display: flex;
                }
                .menu__sub-list {
                    display: none;
                }

                @media (max-width: 768px) {
                    .menu__list {
                        display: none;
                        position: absolute;
                        top: 60px;
                        left: 0;
                        background-color: var(--menu-bg-color);
                        width: 100%;
                        flex-direction: column;
                        padding: 20px 0;
                        z-index: 999;
                    }
                    .menu__item {
                        width: 100%;
                        text-align: left;
                        display: block;
                    }
                    .menu__hamburger {
                        display: block;
                    }
                    .menu__list.active {
                        display: flex;
                    }
                    .menu__link {
                        text-align: left;
                        padding: 10px 20px;
                        width: 100%;
                    }
                    .menu__sub-link {
                        padding: 10px 20px;
                    }
                    .menu__link, .menu__sub-link {
                        border-bottom: 1px solid white;
                    }
                    .menu__right-links {
                        display: none;
                    }
                    .menu__sub-list {
                        position: static;
                        /* No flotante */
                        width: auto;
                        box-shadow: none;
                    }
                    .menu__sub-list.active {
                        display: flex;
                    }
                }
            </style>
        </head>
        <body>
            <header>
                <div class="menu__container">
                    <div class="menu">
                        <div class="menu__logo">
                            <img src="https://kschool.com/wp-content/themes/edix/images/modules/logo-kschool-white.png" alt="Logo" width="50%">
                        </div>
                        <ul class="menu__list">
                            <li class="menu__item active">
                                <a href="#" class="menu__link">Formación <i class="fa-solid fa-angle-down"></i></i></a>
                                <ul class="menu__sub-list">
                                    <li class="menu__sub-item">
                                        <a href="https://www.google.es/" class="menu__sub-link">Digital Marketing School</a>
                                    </li>
                                    <li class="menu__sub-item">
                                        <a href="#" class="menu__sub-link">Tech School</a>
                                    </li>
                                    <li class="menu__sub-item">
                                        <a href="#" class="menu__sub-link">Business School</a>
                                    </li>
                                    <li class="menu__sub-item">
                                        <a href="#" class="menu__sub-link">Sport School</a>
                                    </li>
                                    <li class="menu__sub-item">
                                        <a href="#" class="menu__sub-link">Education School</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu__item">
                                <a href="#" class="menu__link">Somos KS <i class="fa-solid fa-angle-down"></i></i></a>
                                <ul class="menu__sub-list">
                                    <li class="menu__sub-item">
                                        <a href="#" class="menu__sub-link">Conócenos</a>
                                    </li>
                                    <li class="menu__sub-item">
                                        <a href="#" class="menu__sub-link">Nuestros Profesores</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu__item">
                                <a href="#" class="menu__link">KS Talent <i class="fa-solid fa-angle-down"></i></i></a>
                                <ul class="menu__sub-list">
                                    <li class="menu__sub-item">
                                        <a href="#" class="menu__sub-link">Network</a>
                                    </li>
                                    <li class="menu__sub-item">
                                        <a href="#" class="menu__sub-link">Eventos</a>
                                    </li>
                                    <li class="menu__sub-item">
                                        <a href="#" class="menu__sub-link">Empleo</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu__item">
                                <a href="#" class="menu__link">Blog</a>
                            </li>
                        </ul>
                    </div>
                    <div class="menu__divider"></div>
                    <div class="menu__right-links">
                        <div class="menu__item menu__item__right">
                            <a href="#" class="menu__link"><i class="fas fa-link"></i>Empleo</a>
                        </div>
                        <div class="menu__item menu__item__right">
                            <a href="#" class="menu__link"><i class="fas fa-user"></i>Campus</a>
                        </div>
                    </div>
                    <div class="menu__hamburger" id="hamburger-menu">
                        <i class="fas fa-bars"></i>
                    </div>
                </div>
            </header>

            <script>
                const menu = document.getElementById("hamburger-menu");
                const menuList = document.querySelector(".menu__list");
                const menuItems = document.querySelectorAll(".menu__item");

                // Show/Hide menu
                menu.addEventListener("click", () => {
                    menuList.classList.toggle("active");
                    const icon = menu.querySelector("i");
                    icon.classList.toggle("fa-bars");
                    icon.classList.toggle("fa-times");
                });

                menuItems.forEach(item => {
                    item.addEventListener("click", (event) => {
                        event.stopPropagation();

                        // Close submenus
                        menuItems.forEach(i => {
                            const subMenu = i.querySelector(".menu__sub-list");
                            if (subMenu) {
                                subMenu.classList.remove("active"); // Close
                            }
                            i.classList.remove("active"); // No "active class"
                        });

                        const subMenu = item.querySelector(".menu__sub-list");
                        if (subMenu) {
                            subMenu.classList.toggle("active");
                        }

                        item.classList.toggle("active");
                    });
                });

                // Close submenu all
                document.addEventListener("click", (event) => {
                    if (!menuList.contains(event.target)) {
                        menuItems.forEach(item => {
                            const subMenu = item.querySelector(".menu__sub-list");
                            if (subMenu) {
                                subMenu.classList.remove("active");
                            }
                        });
                    }
                });
            </script>
        </body>
        </html>
    ';
?>