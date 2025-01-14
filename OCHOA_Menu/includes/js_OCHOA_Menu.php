<?php
/*
	OCHOA Menu
*/

/* JS Scripts */
add_action( 'wp_footer', function () {
?>
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
<?php
});