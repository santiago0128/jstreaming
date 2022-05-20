<head>
    <meta charset="utf-8">
    <title>Jsteaming</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="img/favicon.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <?php if (is_file('lib/owlcarousel/assets/owl.carousel.min.css')) {
      echo'<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">';
    } else {
        echo'<link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">';
    }
    ?>
    <?php if (is_file('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')) {
      echo'<link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet">';
    } else {
        echo'<link href="../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet">';
    }
    ?>
    <?php if (is_file('css/bootstrap.min.css')) {
      echo'<link href="css/bootstrap.min.css" rel="stylesheet">';
    } else {
        echo'<link href="../css/bootstrap.min.css" rel="stylesheet">';
    }
    ?>
    <?php if (is_file('css/style.css')) {
      echo'<link href="css/style.css" rel="stylesheet">';
    } else {
        echo'<link href="../css/style.css" rel="stylesheet">';
    }
    ?>
</head>