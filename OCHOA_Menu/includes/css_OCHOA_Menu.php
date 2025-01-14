<?php
/*
	OCHOA Menu
*/

/* CSS Styles */
add_action( 'wp_head', function () {
?>
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
		.header__menu {
			width: auto;
			max-width: 100% !important;
			padding: 10px 20px;
			background-color: var(--menu-bg-color);
			/* For Global Menus */
			/*position: fixed;*/
			top: 0;
			left: 0;
			z-index: 1000;
		}
		.menu__container {
			max-width: auto;
			margin: 0 auto;
			display: flex;
			justify-content: space-between;
			align-items: center;
		}
		.menu {
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
		}
		.menu__item.active .menu__link {
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
			.header__menu {
                position: relative;
            }
            .menu__list {
                display: none;
                position: absolute;
                top: 100%;
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
				width: auto;
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
<?php
});