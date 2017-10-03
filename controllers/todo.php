<?php

#
# controller todo
#

$app->group('/todo', function () {

    # create
    $this->get('/insert/{todo}', function ($request, $response, $args) {

        $todo = $request->getAttribute('todo');
        insert( get_new($todo) );
        return $response->withRedirect($request->getUri()->getBasePath());

    });

    # read
    $this->get('/read/{id}', function ($request, $response, $args) {

        #
        # nothing
        #

    });

    # update
    $this->get('/update/id/{id}/descr/{descricao}', function ($request, $response, $args) {

        $id    = $request->getAttribute('id');
        $descr = $request->getAttribute('descricao');
        update($id, $descr);

        return $response->withRedirect($request->getUri()->getBasePath());

    });

    # delete
    $this->get('/delete/{id}', function ($request, $response, $args) {
        delete($request->getAttribute('id'));
        return $response->withRedirect($request->getUri()->getBasePath());
    });

    #
    # index/toggle-all
    #
    $this->get('/toggle-all', function ($request, $response, $args) {

        # toggle
        if (  $_SESSION['state']['all-selected']  ) {
            select_all();
            $_SESSION['state']['all-selected'] = false; # turn off
        } else {
            unselect_all();
            $_SESSION['state']['all-selected'] = true;  # turn on
        }

        return $response->withRedirect($request->getUri()->getBasePath());

    });

    #
    # index/toggle/id
    #
    $this->get('/toggle/{id}', function ($request, $response, $args) {
        toggle($request->getAttribute('id'));
        return $response->withRedirect($request->getUri()->getBasePath());

    });

    #
    # index/clear-completed/
    #
    $this->get('/clear-completed/', function ($request, $response, $args) {
        clear_completed();
        return $response->withRedirect($request->getUri()->getBasePath());
    });

});

