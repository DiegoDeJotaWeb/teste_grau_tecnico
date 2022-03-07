<?php
include_once "dataMenu.php";
?>


  <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">FORÇA DE HABITO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Cadastrar
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Usuario</a>
                        <a class="dropdown-item" href="#">Cliente</a>
                        <a class="dropdown-item" href="#">Categoria</a>
                    </div>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Relatório
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Usuario</a>
                        <a class="dropdown-item" href="#">Cliente</a>
                        <a class="dropdown-item" href="#">Categoria</a>
                    </div>
                </li>


            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>




<div class="page-sidebar-wrapper">
	<div class="page-sidebar navbar-collapse collapse">
		<!-- BEGIN SIDEBAR MENU -->
		<ul class="page-sidebar-menu">
			<li class="sidebar-toggler-wrapper">
				<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				<div class="sidebar-toggler hidden-phone">
				</div>
				<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
			</li>
			<li class="sidebar-search-wrapper">
				<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
				<form class="sidebar-search" action="extra_search.html" method="POST">
					<div class="form-container">
						<div class="input-box">
							<a href="javascript:;" class="remove"></a>
							<input type="text" placeholder="Search..." />
							<input type="button" class="submit" value=" " />
						</div>
					</div>
				</form>
				<!-- END RESPONSIVE QUICK SEARCH FORM -->
			</li>

			<?php
			function echoList($array)
			{
				foreach ($array as $item) {

					if (isset($item['apName'])) {
						echo '<li class="" id="ativar-' . $item['apName'] . '"><a href="javascript:;"><span class="selected"></span>';
					} else {
						echo '<li class="" id=""><a href="' . $item['link'] . '"><span class="selected"></span>';
					}

					if (isset($item['iconMenu'])) {

						echo '<i class="' . $item['iconMenu'] . '"></i>';
					} else {
						echo '<i class=""></i>';
					}

					if (isset($item['apName'])) {
						echo '<span class="title" id="' . $item['apName'] . '">' . $item['name'] . '</span>';
					} else {
						echo '<span class="title" id="">' . $item['name'] . '</span>';
					}



					if (isset($item['iconSetaArrow'])) {
						echo '<span class="' . $item['iconSetaArrow'] . '"></span>';
					}

					echo '</a>';

					if (isset($item['child']) && !empty($item['child'])) {
						echo '<ul class="sub-menu">
						
						<li>
						
					';
						echoList($item['child']);
						echo "</ul></li>";
					}

					echo '</li>';
				}
			}

			echoList($organized);



			?>

		</ul>
		<!-- END SIDEBAR MENU -->
	</div>
</div>