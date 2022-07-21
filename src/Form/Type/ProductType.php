<?php

declare(strict_types=1);

namespace App\Form\Type;

use App\Entity\Product;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('colour', ChoiceType::class, [
            'choices'  => [
                'Red',
                'Blue',
                'Green'
            ],
        ]);
    }
}
