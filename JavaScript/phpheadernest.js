window.onload = function() {
const header = document.createElement('header');
header.classList.add('navbar', 'navbar-expand-lg', 'navbar-light', 'bg-light','fixed-top');
header.innerHTML = `
<a class="navbar-brand" href="../../index.php">Vinnie's Trattoria</a>
<button
  class="navbar-toggler"
  type="button"
  data-toggle="collapse"
  data-target="#navbarNavDropdown"
  aria-controls="navbarNavDropdown"
  aria-expanded="false"
  aria-label="Toggle navigation"
>
  <span class="navbar-toggler-icon"></span>
</button>
<div
  class="collapse navbar-collapse justify-content-end"
  id="navbarNavDropdown"
>
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="../../HTML/home.html">HOME</a>
    </li>
    <li class="nav-item dropdown">
      <a
        class="nav-link dropdown-toggle"
        href="#"
        id="about-us-dropdown"
        role="button"
        data-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false"
      >
        ABOUT US
      </a>
      <div class="dropdown-menu" aria-labelledby="about-us-dropdown">
        <a class="dropdown-item" href="../../HTML/about_us.html">KNOW US</a>
        <a class="dropdown-item" href="../hiring.php">JOIN US</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a
        class="nav-link dropdown-toggle"
        href="#"
        id="menu-dropdown"
        role="button"
        data-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false"
      >
        MENU
      </a>
      <div class="dropdown-menu" aria-labelledby="menu-dropdown">
        <a class="dropdown-item" href="../MENUPHP/menu.php">CHECK OUR MENU</a>
        <a class="dropdown-item" href="../../HTML/delivery.html">DELIVERY</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a
        class="nav-link dropdown-toggle"
        href="#"
        id="reviews-dropdown"
        role="button"
        data-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false"
      >
        REVIEW
      </a>
      <div class="dropdown-menu" aria-labelledby="reviews-dropdown">
        <a class="dropdown-item" href="../REVIEWPHP/reviews.php">CHECK REVIEWS</a>
        <a class="dropdown-item" href="../REVIEWPHP/add_review.php">ADD A REVIEW</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a
        class="nav-link dropdown-toggle"
        href="#"
        id="blog-dropdown"
        role="button"
        data-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false"
      >
        BLOG
      </a>
      <div class="dropdown-menu" aria-labelledby="blog-dropdown">
        <a class="dropdown-item" href="../BLOGPHP/blog_index.php">CHECK OUR BLOGS</a>
        <a class="dropdown-item" href="../BLOGPHP/add.php">ADD A BLOG</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../../HTML/gallery.html">GALLERY</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../../HTML/contact.html">CONTACT</a>
    </li>
  </ul>
</div>
`;
document.body.append(header);
}


