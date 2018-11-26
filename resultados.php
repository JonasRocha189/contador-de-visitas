    <?php
    include 'contadorVisitas.php';


    // Pega o total de visitas únicas de hoje
    $total = pegaVisitas();
    // Pega o total de visitas únicas desde o começo do mês
    $total = pegaVisitas('uniques', 'mes');
    // Pega o total de visitas únicas desde o começo do ano
    $total = pegaVisitas('uniques', 'ano');
    // Pega o total de pageviews de hoje
    $total = pegaVisitas('pageviews');
    // Pega o total de pageviews desde o começo do mês
    $total = pegaVisitas('pageviews', 'mes');
    // Pega o total de pageviews desde o começo do ano
    $total = pegaVisitas('pageviews', 'ano');


    echo "Total visitas unicas do dia : ".pegaVisitas()."<br>";
    echo "Total de visitas unicas desde comeco do mes : ".pegaVisitas('uniques', 'mes')."<br>";
    echo "Total de visitas unicas desde comeco do ano : ".pegaVisitas('uniques', 'ano')."<br>";
    

    echo "Total Pageviews de hoje : ".pegaVisitas('pageviews')."<br>";
    echo "Total de Pageviews desde comeco do mes : ".pegaVisitas('pageviews', 'mes')."<br>";
    echo "Total de Pageviews desde o comeco do ano : ".pegaVisitas('pageviews', 'ano')."<br>";
