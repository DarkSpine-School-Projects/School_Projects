<?php 
if(!isset($_COOKIE['user_id'])){
    echo
    '<a href="http://localhost/Projects_Done_On_Lessons/PracowniaRepo/own_project/assets/site/login.php">
    <div class="accaunt-btn">
        <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
            <path
                d="M12 0c-5.083 0-8.465 4.949-3.733 13.678 1.596 2.945-1.725 3.641-5.09 4.418-3.073.709-3.187 2.235-3.177 4.904l.004 1h23.99l.004-.969c.012-2.688-.093-4.223-3.177-4.935-3.438-.794-6.639-1.49-5.09-4.418 4.719-8.912 1.251-13.678-3.731-13.678m0 1c1.89 0 3.39.764 4.225 2.15 1.354 2.251.866 5.824-1.377 10.06-.577 1.092-.673 2.078-.283 2.932.937 2.049 4.758 2.632 6.032 2.928 2.303.534 2.412 1.313 2.401 3.93h-21.998c-.01-2.615.09-3.396 2.401-3.93 1.157-.266 5.138-.919 6.049-2.94.387-.858.284-1.843-.304-2.929-2.231-4.115-2.744-7.764-1.405-10.012.84-1.412 2.353-2.189 4.259-2.189" />
        </svg>
        <div class="login_desc">
        <span class="login_desc-text">
        Login
        </span>
        </div>

    </div>
</a>
';
}else{
    if(isset($_POST["logout"])){
    setcookie("user_id","".$_COOKIE['user_id']."",time() - 3600, "/Projects_Done_On_Lessons/PracowniaRepo/own_project/");

    header('Refresh:0');
    
    

    
}
      echo
    '
    <button onClick="show_option()" class="accaunt-btn">
        <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
            <path
                d="M12 0c-5.083 0-8.465 4.949-3.733 13.678 1.596 2.945-1.725 3.641-5.09 4.418-3.073.709-3.187 2.235-3.177 4.904l.004 1h23.99l.004-.969c.012-2.688-.093-4.223-3.177-4.935-3.438-.794-6.639-1.49-5.09-4.418 4.719-8.912 1.251-13.678-3.731-13.678m0 1c1.89 0 3.39.764 4.225 2.15 1.354 2.251.866 5.824-1.377 10.06-.577 1.092-.673 2.078-.283 2.932.937 2.049 4.758 2.632 6.032 2.928 2.303.534 2.412 1.313 2.401 3.93h-21.998c-.01-2.615.09-3.396 2.401-3.93 1.157-.266 5.138-.919 6.049-2.94.387-.858.284-1.843-.304-2.929-2.231-4.115-2.744-7.764-1.405-10.012.84-1.412 2.353-2.189 4.259-2.189" />
        </svg>
    </button>
    <div onClick="hidde_option()" id="option_container_bg" ></div>
        <div id="option_container" style=" background:linear-gradient(180deg, rgba(0,0,0,1) 0%, rgba(0,0,0,0.8463760504201681) 34%, rgba(0,0,0,0.6615021008403361) 100%), url(/Projects_Done_On_Lessons/PracowniaRepo/own_project/assets/img/'.$_COOKIE['user_id'].'.png) !important; background-size: cover !important; background-position: center !important;  ">
            
            <svg class="close-btn" onClick="hidde_option()" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" "><path d="m12 10.93 5.719-5.72c.146-.146.339-.219.531-.219.404 0 .75.324.75.749 0 .193-.073.385-.219.532l-5.72 5.719 5.719 5.719c.147.147.22.339.22.531 0 .427-.349.75-.75.75-.192 0-.385-.073-.531-.219l-5.719-5.719-5.719 5.719c-.146.146-.339.219-.531.219-.401 0-.75-.323-.75-.75 0-.192.073-.384.22-.531l5.719-5.719-5.72-5.719c-.146-.147-.219-.339-.219-.532 0-.425.346-.749.75-.749.192 0 .385.073.531.219z"/></svg>   
                
           
                <div class="account_setting">
                    <h3>Accaunt Settings</h3>
                </div>

            <form class="logout" style="display:flex; flex-direction:column;"action="/Projects_Done_On_Lessons/PracowniaRepo/own_project/image_req.php" method="post" enctype="multipart/form-data">
                <div>Select Your Account Picture</div>
                <br>
                <div style="display:flex; flex-direction:row; width:80%; gap:0px;">
                <label for="files" class="logout-btn" style=" color:white !important; background: rgb(16,16,16); padding:10px; width:100%; text-align:center; cursor:pointer; z-index:1000;" name="uploadfile">Select Image</label>
              
                <input id="files" style=" visibility:hidden;"; name="uploadfile" type="file" title="">
                <button type="sumbit" name="send_picture" class="logout-btn" style="width:100%; padding:5px;margin-left: -5px;">Commit</button>
                </div>
            </form>
            <form class="logout" action="/Projects_Done_On_Lessons/PracowniaRepo/own_project/" method="post">
                <button type="sumbit" name="logout" class="logout-btn">
                    logout
                </button>
            </form>
        </div>
        
    

    <!-- hidde account option -->
    <script>
    function hidde_option() {
    document
        .getElementById("option_container_bg")
        .classList.remove("option_show");
    document
        .getElementById("option_container")
        .classList.remove("option_show");
    document
        .getElementById("body")
        .classList.remove("overflow");
        
    }
    
    </script>

    <!-- show account option -->
    <script>
    function show_option() {
    document
        .getElementById("option_container_bg")
        .classList.toggle("option_show");
    document
        .getElementById("option_container")
        .classList.toggle("option_show");
    document
        .getElementById("body")
        .classList.toggle("overflow");
    }
    </script>

';
};
   


?>