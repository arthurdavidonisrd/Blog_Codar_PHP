<?php 
    include_once('templates/header.php');

    if(isset($_GET['id'])){

        $postid = $_GET['id'];
        $currentPost;

        foreach($posts as $post){
            if($post['id'] == $postid){
                $currentPost = $post;

            }
        }
    }
?>
<main>

   <div class="hold">
       <div class="content-container">
           <h1> <?= $currentPost['title'] ?></h1>
           <p><?=$currentPost['description'] ?></p>
           <img src="<?= $BASE_URL ?>/image/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
       </div>
       <div class="about-content">
            <h2>Sobre a matéria:</h2>
           <p>No vasto universo da programação, a lógica é considerada por muitos como o alicerce fundamental para construir habilidades sólidas e duradouras. O ponto de partida para muitos aspirantes a programadores, a lógica de programação é um componente crucial para o sucesso no desenvolvimento de software.
            A Base Sólida:
            Para compreender a importância da lógica de programação, é necessário enxergá-la como a base sobre a qual todas as outras habilidades são construídas. Assim como um edifício necessita de uma fundação sólida para se manter de pé, os programadores precisam dominar os conceitos lógicos antes de se aventurarem em linguagens específicas.
            A lógica de programação ensina os estudantes a pensar de maneira estruturada, a decompor problemas complexos em partes menores e a desenvolver algoritmos eficientes para resolvê-los. Essa capacidade de raciocínio abstrato é uma habilidade transferível que se torna inestimável ao longo da carreira de um programador.
            Desenvolvimento de Habilidades Analíticas:
            Outro aspecto crucial é o desenvolvimento das habilidades analíticas. A lógica de programação ajuda os estudantes a aprimorar a capacidade de análise crítica, identificação de padrões e solução de problemas. Essas competências transcendem o mundo da programação, tornando-se valiosas em diversas áreas da vida profissional e pessoal.
            Economia de Tempo e Recursos:
            Dominar a lógica de programação também contribui para a economia de tempo e recursos no desenvolvimento de software. Programadores habilidosos na lógica podem planejar e implementar soluções de maneira mais eficiente, evitando retrabalho e minimizando erros. Isso não apenas acelera o processo de desenvolvimento, mas também resulta em produtos mais robustos e confiáveis.
            Perspectivas de Carreira:
            Em um mercado de trabalho cada vez mais competitivo, as empresas valorizam profissionais que possuem uma sólida compreensão da lógica de programação. Muitas entrevistas de emprego para posições de desenvolvimento de software começam com perguntas relacionadas à lógica, destacando a importância dessa habilidade no mundo corporativo.</p>
       
       </div>
   </div>

</main>


    



<?php 
    include_once('templates/footer.php');
?>