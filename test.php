<html>
<script>
function determineCap(){
    var min,med,high, cap;
    var q1,q2;
    var link;
    link = 'https://youradvisor.000webhostapp.com/';
    
    q1 = <?php echo $_GET["q1"]; ?>;
    q2 = <?php echo $_GET["q2"]; ?>
    
    //edit
    min = 3200
    cap = 0;
    
    if (q1 < min) {
        cap = 0; //low budget

    }
    else if (q1 >= min){
        cap = 2; //rich
    }
    
    
    if (q2 == 1 || (cap == 0 && q2 >= 2)){
        if (cap == 0 && q2 >= 2) alert("Recommend low risk determined by financial situation");
        link += 'redirect.php?q1='+q1+'&q2='+q2;
        window.location = link;
    }

    else if(q2 == 2 && cap == 2) {
        link  = "https://youradvisor.000webhostapp.com/MidRisk.html"
        window.location = link;
    }
    
    else{
        link = "https://youradvisor.000webhostapp.com/HighRisk.html";
        window.location = link;
    }

    return false;
}

    
</script>

<body onload="determineCap()";>


</body>
</html>