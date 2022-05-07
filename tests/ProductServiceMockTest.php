<?php

namespace Alifavaldo\Test;

use PHPUnit\Framework\TestCase;
// use ProductRepository;

class ProductServiceMockTest extends TestCase
{
    private ProductRepository $repository;
    private ProductService $service;

    protected function setUp(): void
    {
        $this->repository = $this->createMock(ProductRepository::class);
        $this->service = new ProductService($this->repository);
    }

    public function testStub()
    {
        $product = new Product();
        $product->setId("1");

        $this->repository->method("findById")
            ->willReturn($product);

        $result = $this->repository->findById("1");
        self::assertSame($product, $result);
    }

    public function testStubMap()
    {
        $product1 = new Product;
        $product1->setId("1");

        $product2 = new Product;
        $product2->setId("2");

        $map = [
            ["1", $product1],
            ["2", $product2]
        ];

        $this->repository->method("findById")
            ->willReturnMap($map);

        self::assertSame($product1, $this->repository->findById("1"));
        self::assertSame($product2, $this->repository->findById("2"));
    }

    public function testDeleteSuccess()
    {
        $product = new Product();

        $product->setId("1");
        $this->repository->method("findById")->willReturn($product);
        $this->service->delete("1");
        self::assertTrue(true, "Sukses delete");
    }

    public function testDeleteExeption()
    {
        $this->expectException(\Exception::class);
        $this->repository->method("findById")->willReturn(null);

        $this->service->delete("1");
    }

    public function testMock()
    {
        $product = new Product();
        $product->setId("findById");

        $this->repository->expects(self::once())
            ->method("findById")
            ->willReturn($product);

        $result = $this->repository->findById("1");
        self::assertSame($product, $result);
    }
}
