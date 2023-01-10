<?php 
echo '   
<style>
    body{
        background-image: url(https://avatars.githubusercontent.com/u/119659931?v=4);
        background-size:cover;
        width:100%;
        margin: 0 auto;
        display:flex;
        justify-content: center;
        align-items: center;
        column-gap: 50px;
        animation: background-animation-1 5s alternate infinite;
    }
    @keyframes background-animation-1 {
        50%{
            background-image: url(https://scontent-frt3-2.xx.fbcdn.net/v/t39.30808-6/273044171_1622147901460314_9143705582630719649_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=erlyj0kzYZAAX96llSy&_nc_ht=scontent-frt3-2.xx&oh=00_AfD4FGyFBKbDbxFai9v9M9VV6Nfq8PhSWloOr2JvA-4FFQ&oe=63C06A5D);
        }
        100%{
            background-image: url(https://scontent-frt3-1.xx.fbcdn.net/v/t1.6435-9/71086980_957938341214610_8125416699068416000_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=174925&_nc_ohc=SLOy1B8Q92AAX_MPRip&_nc_oc=AQlqUulyG44aaMksNnZCLm0mx-HgKQ3gLGOV0zi3su3SR-cYGsBCVZAG447A-91VqMY&_nc_ht=scontent-frt3-1.xx&oh=00_AfBGPIgO5dapPgX3Oyf-eGPgX2diqR4kc-h2zBA0VhBr4g&oe=63E49D86);
        }
    }
    a{
        
    }
    p{
    text-shadow:0px 0px 3px white;
    font-size:20px;
        
    }

    img{
        object-fit: cover;
        float:right;
        border-radius:100%;
        box-shadow: 0px 0px 20px black;
        max-height:25%;
    

    }
    button{
        width:100%;
        padding:20px;
    }

    main{
        
    }
    section{
        background-image: url(https://scontent-frt3-1.xx.fbcdn.net/v/t1.6435-9/71086980_957938341214610_8125416699068416000_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=174925&_nc_ohc=SLOy1B8Q92AAX_MPRip&_nc_oc=AQlqUulyG44aaMksNnZCLm0mx-HgKQ3gLGOV0zi3su3SR-cYGsBCVZAG447A-91VqMY&_nc_ht=scontent-frt3-1.xx&oh=00_AfBGPIgO5dapPgX3Oyf-eGPgX2diqR4kc-h2zBA0VhBr4g&oe=63E49D86);
        background-size:cover;
        box-shadow: 0px 0px 20px black;
        padding:20px;
        background-position-y: 100%; 
        border-radius:20px;

    }
</style>';

$input1 = $_POST["input1"];
$input2 = $_POST["input2"];

$wynik = $input1*29 + $input2*50;

echo "<main><section><p>Ilosc biletow ulgowych: <b>". $input1." </b><p>" ;
echo "<p>Ilosc biletow normalnych: <b>". $input2." </b><p>" ;



echo "ŁACZNY KOSZT BILETOW TO:<B> ". $wynik." ZŁ</B>" ;

echo '<p><b>
<a href="http://localhost/Projects_Done_On_Lessons/PracowniaRepo/Zadania_z_ksiazki/obsluga_formularzy/index.html" ><button>Nowe zamowienie</button>  </a></p></b></main>';

echo '<img  id="prof" src="https://scontent-frt3-2.xx.fbcdn.net/v/t39.30808-6/273044171_1622147901460314_9143705582630719649_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=erlyj0kzYZAAX96llSy&_nc_ht=scontent-frt3-2.xx&oh=00_AfD4FGyFBKbDbxFai9v9M9VV6Nfq8PhSWloOr2JvA-4FFQ&oe=63C06A5D" ></section>' ;
    
?>