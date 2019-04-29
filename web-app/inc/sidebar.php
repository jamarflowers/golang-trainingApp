
<!--
**********************************
SIDEBAR
**********************************
-->

<aside class="sidebar" id="sidebar">
    <nav class="menu-items">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="inc/InstallingGo.php">Installing GO</a></li>
            <li><a href="inc/packages.php">Go packages</a></li>
            <li><a href="inc/gofile.php">Setting up your go file</a></li>
            <li><a href="inc/types.php">Data Types and Declerations</a></li>
            <li><a href="inc/arrays.php">Arrays, Slices, Maps</a></li>
            <li><a href="inc/structs.php">Structs and Interfaces</a></li>
            <li><a href="inc/routine_channel.php">Routines and Channels</a></li>
            <li><a href="inc/firstprogram.php">Your First Program</a></li>
            <li><a href="inc/tips.php">Tips and Tid-bits</a></li>
        </ul>
    </nav>


    <!--
    **********************************
    HAMBURGER
    **********************************
    -->
    <div id="hamburger" class="hamburglar menu-open-button">

        <div class="burger-icon">
            <div class="burger-container">
                <span class="burger-bun-top"></span>
                <span class="burger-filling"></span>
                <span class="burger-bun-bot"></span>
            </div>
        </div>

        <!-- svg ring containter -->
        <div class="burger-ring">
            <svg class="svg-ring">
                <path class="path" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="4"
                      d="M 34 2 C 16.3 2 2 16.3 2 34 s 14.3 32 32 32 s 32 -14.3 32 -32 S 51.7 2 34 2"/>
            </svg>
        </div>
        <!-- the masked path that animates the fill to the ring -->

        <svg width="0" height="0">
            <mask id="mask">
                <path xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#000" stroke-miterlimit="10"
                      stroke-width="4" d="M 34 2 c 11.6 0 21.8 6.2 27.4 15.5 c 2.9 4.8 5 16.5 -9.4 16.5 h -4"/>
            </mask>
        </svg>
        <div class="path-burger">
            <div class="animate-path">
                <div class="path-rotation"></div>
            </div>
        </div>

    </div>

    <!--
    **********************************
    HAMBURGER END
    **********************************
    -->
</aside>

<!--
**********************************
SIDEBAR END
**********************************
-->

</article>