<?php

#
# Inicializando variáveis
#
$_SESSION['todos'] = (isset($_SESSION['todos'])) ? $_SESSION['todos'] : [] ;    

#
# Retorna um novo 'todo'
#
function get_new($description) {
    return [
        'id'        => get_new_id(),
        'descr'     => $description,
        'completed' => false
    ];    
}

#
# Retorna um novo id
#
function get_new_id() {
    return count($_SESSION['todos']) + 1;
}

#
# C - insert
#
function insert($todo) {
    $id = $todo['id'];
    $_SESSION['todos'][$id] = $todo;
}

#
# R - read
#
function read($id) {
    return $_SESSION['todos'][$id];
}

#
# U - update
#
function update($id, $descricao) {
    $todo = read($id);
    $todo['descr'] = $descricao;
    $_SESSION['todos'][$id] = $todo;    
}

#
# D - delete
#
function delete($id) {
    unset($_SESSION['todos'][$id]);    
}

#
# Retorna um array de 'todos'
#
function get_todos($filtro = 'all') {
    switch ($filtro) {
        case 'active':
            return active();
            break;
        case 'completed':
            return completed();
            break;
        case 'all':
            return all();
            break;
    }
}

#
# todos
#
function all() {
    return isset($_SESSION['todos']) ? $_SESSION['todos'] : [];
}

#
# todos active
#
function active() {
    $active = [];
    foreach($_SESSION['todos'] as $key => $todo) {
        if (!$todo['completed']) {
            $active[$key] = $todo;
        }
    }
    return $active;
}

#
# todos completed
#
function completed() {
    $completed = [];
    foreach($_SESSION['todos'] as $key => $todo) {
        if ($todo['completed']) {
            $completed[$key] = $todo;
        }
    }
    return $completed;
}

#
# Seleciona todos
#
function select_all() {
    foreach($_SESSION['todos'] as $key => $todo) {
            $_SESSION['todos'][$key]['completed'] = true;
    }
    return true;    
}

#
# (des)Seleciona todos
#
function unselect_all() {
    foreach($_SESSION['todos'] as $key => $todo) {
            $_SESSION['todos'][$key]['completed'] = false;
    }
    return true;    
}

#
# Retorna o total de 'todos'
#
function count_todos($todos = []) {
    return count($todos);
}

#
# Toogle todo
#
function toggle($id) {
    $_SESSION['todos'][$id]['completed'] = !$_SESSION['todos'][$id]['completed'];
}

#
# Clear Completed
#
function clear_completed() {
    foreach($_SESSION['todos'] as $key => $todo) {
        if ($todo['completed']) {
            delete($key);
        }
    }    
}