<?php

namespace App\Repository;

use App\Entity\OldPasswords;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<OldPasswords>
 *
 * @method OldPasswords|null find($id, $lockMode = null, $lockVersion = null)
 * @method OldPasswords|null findOneBy(array $criteria, array $orderBy = null)
 * @method OldPasswords[]    findAll()
 * @method OldPasswords[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OldPasswordsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OldPasswords::class);
    }

//    /**
//     * @return OldPasswords[] Returns an array of OldPasswords objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('o.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?OldPasswords
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
