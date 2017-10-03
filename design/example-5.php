<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php include("head.html") ?>
    </head>
    <body class="learn-bar">

        <aside class="learn">
            <?php include("nav.html") ?>
        </aside>

        <section class="todoapp">
            <header class="header">
                <h1>todos</h1>
                <input class="new-todo" placeholder="What needs to be done?" autofocus="">
            </header>
            <section class="main">
                <input class="toggle-all" id="toggle-all" type="checkbox">
                <label for="toggle-all">Mark all as complete</label>
                <ul class="todo-list">
                    <li class="completed">
                        <div class="view">
                            <input class="toggle" checked="" type="checkbox">
                            <label>123</label>
                            <button class="destroy"></button>
                        </div>
                    </li>
                    <li class="completed">
                        <div class="view">
                            <input class="toggle" checked="" type="checkbox">
                            <label>456</label>
                            <button class="destroy"></button>
                        </div>
                    </li>
                    <li class="completed">
                        <div class="view">
                            <input class="toggle"checked="" type="checkbox">
                            <label>789</label>
                            <button class="destroy"></button>
                        </div>
                    </li>
                    <li class="completed">
                        <div class="view">
                            <input class="toggle" checked="" type="checkbox">
                            <label>9</label>
                            <button class="destroy"></button>
                        </div>
                    </li>
                </ul>
            </section>
            <footer class="footer">
                <span class="todo-count"><strong>3</strong> items left</span>
                <ul class="filters">
                    <li>
                        <a class="selected" href="#/">All</a>
                    </li>
                    <li>
                        <a href="#/active">Active</a>
                    </li>
                    <li>
                        <a href="#/completed">Completed</a>
                    </li>
                </ul>
                <button class="clear-completed">Clear completed</button>
            </footer>
        </section>

    </body>
</html>
