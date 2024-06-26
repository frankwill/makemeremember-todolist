<?php

namespace mmr\todolist\Aplication;

use mmr\todolist\Infrastructure\Repository\UserRepository;

class OauthUserController
{

  public static function processaRequisicao(UserRepository $userRepository)
  {
    $request = file_get_contents("php://input");
    $response = json_decode($request, true);

    $user = $userRepository->find($response['username_user']);

    echo json_encode($user);
  }
}
