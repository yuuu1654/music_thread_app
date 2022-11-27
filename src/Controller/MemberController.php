<?php

namespace App\Controller;

use App\Entity\Member;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;

class MemberController extends AbstractController
{
    // #[Route('/member', name: 'app_member')]
    // public function index(): Response
    // {
    //     return $this->render('member/index.html.twig', [
    //         'controller_name' => 'MemberController',
    //     ]);
    // }

    /**
     * パラメーター機能
     * →URLにパラメーターがないとエラーになる
     */
    #[Route('/member/{name_sei}/{name_mei}', name: 'member_personal')]
    public function member($name_sei='(noname)', $name_mei='(noname)'): Response
    {
        return new Response("Hello Symfony!");
    }

    // リダイレクトとRedirectResponse
    #[Route("/other/{domain}", name: "other")]
    public function other(Request $request, $domain="")
    {
        if($domain == ""){
            return $this->redirect("/members");
        } else {
            return new RedirectResponse("http://{$domain}.com");
        }
    }

    // メンバー一覧を表示
    #[Route('/members', name: 'member_list')]
    public function index(Request $request): Response
    {
        $repository = $this->getDoctrine()->getRepository(Member::class);
        return $this->render("member/index.html.twig", [
            "controller_name" => "MemberController",
        ]);
    }
}
