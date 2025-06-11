<?php
include_once 'comunicaAPI.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid px-4">
            <a class="navbar-brand" href="#"><i class="bi bi-calendar-date"></i> DoneList</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav gap-2">
                    <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-house-fill"></i> Início</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-info-circle-fill"></i> Sobre</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-envelope-at-fill"></i> Contato</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <h1>Lista de Tarefas</h1>
        <ul class="tarefas">
            <?php foreach ($tarefas as $tarefa): ?>
                <li style="border-left: 6px solid <?php echo $tarefa['status'] == 'Pendente' ? 'var(--cor-destaque)' : 'var(--cor-secundaria)'; ?>">
                    <div class="tarefa-conteudo">
                        <i class="bi bi-check2-circle tarefa-icone" style="color: <?php echo $tarefa['status'] == 'Pendente' ? 'var(--cor-destaque)' : 'var(--cor-secundaria)'; ?>;"></i>
                        <span><?php echo htmlspecialchars($tarefa["descricao"]); ?></span>
                    </div>
                    <span class="status <?php echo strtolower(htmlspecialchars($tarefa["status"])); ?>">
                        <?php echo htmlspecialchars($tarefa["status"]); ?>
                    </span>
                </li>
            <?php endforeach; ?>
        </ul>
    </main>

    <footer>
        <div class="footer-info">&copy; <?php echo date("Y"); ?> DoneList LTDA.</div>
        <div class="social-links">
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-twitter"></i></a>
            <a href="#"><i class="bi bi-linkedin"></i></a>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>