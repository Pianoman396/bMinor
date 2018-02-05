<?php require_once('header.php'); ?>

       <section id="fieutiures" class="wrapper-full">
        <div class="extra wrapper">
          <div class="fiuture--tabs">
            <p class="icon"><i class="fa fa-cog" aria-hidden="true"></i>
</p>       	<h4 class="tab--name">Edithamble Theme</h4>
          	<p class="description tab--description">
              Lorem ipsum dolor sit amet, consectetur
            piscing elit. Suspendisse fringilla fringilla.
            </p>
          </div>
          <div class="fiuture--tabs">
            <p class="icon"><i class="fa fa-star" aria-hidden="true"></i></p>
            <h4 class="tab--name">Flat Design</h4>
          	<p class="description tab--description">
               Lorem ipsum dolor sit amet, consectetur
            piscing elit. Suspendisse fringilla fringilla.
            </p>
          </div>
          <div class="fiuture--tabs">
            <p class="icon"><i class="fa fa-globe" aria-hidden="true"></i>
</p>          	<h4 class="tab--name">Reach Your Audience</h4>
          	<p class="description tab--description">
               Lorem ipsum dolor sit amet, consectetur
            piscing elit. Suspendisse fringilla fringilla.</p>
          </div>
          </div>
         </section>

        <!--*****   Subscribe section   ******-->
      <section id="subscribe" class="wrapper-full">
        <div class="wrapper clearfloat">
            <div class="wrapper__inner">
              <h3 class="title--subscribe">Get Notified Of Any Updates!</h3>
              <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse fringilla fringilla nisl congue congue. Maecenas nec condimentum libero, at   elementum mauris. Phasellus eget nisi dapibus, ultricies nisl at, hendrerit risusuis ornare luctus id sollicitudin ante lobortis at.</p>
              <form class="notification--send" action="" method="POST">
              	<input type="email" placeholder="Email Adress">
              	<input type="submit" value="Notify">
              </form>
            </div>
            <div class="subscribe__info">
             <iframe src="https://player.vimeo.com/video/24478061?title=0&byline=1&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
        </div>
      </section>
      <!-- testimonials section -->
      <section id="testimonials" class="wrapper-full">
        <div class="wrapper">
          <blockuote class="quote">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ipsum voluptate quis soluta eaque necessitatibus sint, assumenda consequuntur reiciendis, dolores molestias ea velit sit perferendis asperiores consectetur itaque. Ea reiciendis, dolore voluptate quia.</blockuote>
          <h4 class="quote--after">Jane Hunt</h4>
        <div class="testimonials--list">
          <ul class="slide">
            <?php
                for ($i = 0; $i < 21; $i++):
                   echo "<a href=\'javascript:;\' class=\'left--side\'><li class='item'><a href=\"javascript:;\" class='href--item'><img src='img/origin/img_$i.png'></a></li> ";
                endfor;
            ?>
          </ul>
         </div>
          <div class="social">
            <h3 class="social__name">Say Hi & Get in Touch</h3>
            <p class="description descript--pages">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat!</p>
            <ul class="social__resources">
              <li class="page "><a href="javascript:;"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li class="page "><a href="javascript:;"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li class="page "><a href="javascript:;"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
              <li class="page "><a href="javascript:;"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
              <li class="page "><a href="javascript:;"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
              <li class="page "><a href="javascript:;"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </section>
<?php require_once('footer.php'); ?>