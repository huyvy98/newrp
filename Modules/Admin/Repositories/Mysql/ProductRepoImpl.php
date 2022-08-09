<?php
namespace Modules\Admin\Repositories\Mysql;


use App\Models\Product;
use Modules\Admin\Contracts\Repositories\Mysql\ProductRepository;

class ProductRepoImpl implements ProductRepository
{
    /**
     * Save Product to database
     *
     * @param Product $product
     * @return Product
     */
    public function save(Product $product): Product
    {
        $product->save();
        return $product;
    }

    /**
     * Get all product
     *
     */
    public function getProduct()
    {
        Product::all();
    }

    /**
     * Create product
     *
     * @param array $attributes
     * @return Product
     */
    public function createProduct(array $attributes): Product
    {
        return Product::create($attributes);
    }

    /**
     * Update product
     * @param $id
     * @param array $attributes
     * @return Product
     */
    public function updateProduct($id, array $attributes): Product
    {
        return Product::where($id)->update($attributes);
    }

    /**
     * Delete product
     * @param $id
     * @return Product
     */
    public function deleteProduct($id): Product
    {
        return Product::where($id)->delete();
    }
}
