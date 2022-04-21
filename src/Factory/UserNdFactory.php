<?php

namespace App\Factory;

use App\Entity\UserNd;
use App\Repository\UserNdRepository;
use Zenstruck\Foundry\RepositoryProxy;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;

/**
 * @extends ModelFactory<UserNd>
 *
 * @method static UserNd|Proxy createOne(array $attributes = [])
 * @method static UserNd[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static UserNd|Proxy find(object|array|mixed $criteria)
 * @method static UserNd|Proxy findOrCreate(array $attributes)
 * @method static UserNd|Proxy first(string $sortedField = 'id')
 * @method static UserNd|Proxy last(string $sortedField = 'id')
 * @method static UserNd|Proxy random(array $attributes = [])
 * @method static UserNd|Proxy randomOrCreate(array $attributes = [])
 * @method static UserNd[]|Proxy[] all()
 * @method static UserNd[]|Proxy[] findBy(array $attributes)
 * @method static UserNd[]|Proxy[] randomSet(int $number, array $attributes = [])
 * @method static UserNd[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static UserNdRepository|RepositoryProxy repository()
 * @method UserNd|Proxy create(array|callable $attributes = [])
 */
final class UserNdFactory extends ModelFactory
{
    public function __construct()
    {
        parent::__construct();

        // TODO inject services if required (https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services)
    }

    protected function getDefaults(): array
    {
        return [
            // TODO add your default values here (https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories)
            'email' => self::faker()->email(),
            'firstName' => self::faker()->firstName(),
        ];
    }

    protected function initialize(): self
    {
        // see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
        return $this
            // ->afterInstantiate(function(UserNd $userNd) {})
        ;
    }

    protected static function getClass(): string
    {
        return UserNd::class;
    }
}
