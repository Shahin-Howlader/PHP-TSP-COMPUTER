<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h3>Tooltip Example</h3>
  <a href="#" data-toggle="tooltip" title="Hooray!">Hover over me</a>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque quas sequi dolorum nihil cupiditate maiores natus odio obcaecati possimus. Nemo debitis ex quis excepturi ea labore ipsa velit facilis, quas, necessitatibus at cum deserunt optio temporibus officiis sapiente aliquam nihil praesentium veniam modi odio. Nam nobis vel beatae natus eaque, doloribus obcaecati fugiat officia quibusdam repellat odit facere veritatis quisquam molestias hic dignissimos rem debitis deleniti eos. Veritatis tempora aspernatur debitis magnam alias officiis corporis adipisci eum, magni reprehenderit, quo accusantium voluptate quasi dolore. Deleniti repellat laudantium in rerum animi, ipsam facilis qui veniam nobis, alias voluptas quaerat mollitia ratione minima possimus delectus atque iure est. Dolor natus libero eaque magnam beatae quam hic blanditiis quaerat facilis culpa error, nisi sequi, autem omnis in debitis eveniet doloribus amet aliquam ad. Dolor quo possimus corporis vitae cupiditate. Quo error, maxime ducimus necessitatibus. Veritatis dolore placeat dignissimos cumque hic culpa eum beatae!</p>

  <p data-toggle="tooltip" title="ToolTip">Some Content Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero reiciendis accusantium rem commodi quibusdam necessitatibus veniam numquam, dolores aliquid, vitae fugiat aliquam culpa, sint quis. Velit dolorum voluptatem, debitis, autem porro deserunt nemo numquam aperiam ex quis ipsum fuga labore, ipsam, corporis consectetur harum nostrum consequatur laboriosam. Soluta eos aperiam corporis, repellat dolor amet praesentium accusamus magnam temporibus fugiat eaque architecto perspiciatis saepe repudiandae consequuntur, illo minus dignissimos debitis itaque. Unde corporis placeat inventore eaque reprehenderit debitis provident distinctio earum ab dolores! Suscipit ab voluptatum inventore! Illum quas distinctio fugit doloribus fugiat assumenda debitis rem at! Eveniet placeat reiciendis in veniam consequuntur ipsum rem nam totam eaque, alias. Vitae dicta, sequi consequatur. Voluptatum dolor doloremque, eligendi dicta aliquam debitis optio magnam assumenda laudantium at accusantium expedita sunt nostrum perferendis nobis ex fuga laboriosam consectetur distinctio velit quia laborum delectus! Quasi, autem, velit. Reprehenderit quaerat totam ad iure ab quasi accusantium excepturi quas incidunt ipsum explicabo itaque, nesciunt aut exercitationem iste obcaecati possimus quibusdam dolor commodi ea enim nihil magnam? Molestiae suscipit molestias, qui commodi accusantium eligendi possimus odit modi doloribus. Ea architecto facilis magnam. Quidem, facere consequatur optio placeat vero! Odio nisi architecto expedita aliquid obcaecati alias. Consectetur, rem nam.</p>
  <a href="#" data-toggle="tooltip" title="IDB-BISEW is a Scolarship Program run by IDB">IDB-BISEW</a>
</div>

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>

</body>
</html>
