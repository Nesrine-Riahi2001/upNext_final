<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\Session\SessionFactoryInterface;

class CartService
{
    private $session;

    public function __construct(SessionFactoryInterface $sessionFactory)
    {
        $this->session = $sessionFactory->createSession();
        if (!$this->session->isStarted()) {
            $this->session->start();
        }
    }

    public function addProduct(int $productId): void
    {
        $cart = $this->session->get('cart', []);
        if (!in_array($productId, $cart)) {
            $cart[] = $productId;
            $this->session->set('cart', $cart);
        }
    }

    public function removeProduct(int $productId): void
    {
        $cart = $this->session->get('cart', []);
        $key = array_search($productId, $cart);
        if ($key !== false) {
            unset($cart[$key]);
            $this->session->set('cart', array_values($cart));
        }
    }

    public function getCart(): array
    {
        return $this->session->get('cart', []);
    }

    public function clearCart(): void
    {
        $this->session->remove('cart');
    }
}