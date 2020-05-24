<?php


namespace OneSite\DesignPattern\Tests;


use OneSite\DesignPattern\Builder\MysqlQueryBuilder;
use OneSite\DesignPattern\Builder\PostgresQueryBuilder;
use OneSite\DesignPattern\Builder\SQLQueryBuilder;
use PHPUnit\Framework\TestCase;

/**
 * Class BuilderTest
 * @package OneSite\DesignPattern\Tests
 */
class BuilderTest extends TestCase
{
    /**
     *
     */
    public function testBuilderPattern()
    {
        $this->clientCode(new MysqlQueryBuilder());

        $this->clientCode(new PostgresQueryBuilder());

        return $this->assertTrue(true);
    }

    /**
     * @param SQLQueryBuilder $queryBuilder
     */
    private function clientCode(SQLQueryBuilder $queryBuilder)
    {
        $query = $queryBuilder
            ->select("users", ["name", "email", "password"])
            ->where("age", 18, ">")
            ->where("age", 30, "<")
            ->limit(10, 20)
            ->getSQL();

        echo $query;
    }
}
