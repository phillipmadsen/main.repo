<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateShopAPIRequest;
use App\Http\Requests\API\UpdateShopAPIRequest;
use App\Models\Shop;
use App\Repositories\ShopRepository;
use Illuminate\Http\Request;
use InfyOm\Generator\Controller\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use InfyOm\Generator\Utils\ResponseUtil;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class ShopController
 * @package App\Http\Controllers\API
 */

class ShopAPIController extends AppBaseController
{
    /** @var  ShopRepository */
    private $shopRepository;

    public function __construct(ShopRepository $shopRepo)
    {
        $this->shopRepository = $shopRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/shops",
     *      summary="Get a listing of the Shops.",
     *      tags={"Shop"},
     *      description="Get all Shops",
     *      produces={"application/json"},
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="array",
     *                  @SWG\Items(ref="#/definitions/Shop")
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function index(Request $request)
    {
        $this->shopRepository->pushCriteria(new RequestCriteria($request));
        $this->shopRepository->pushCriteria(new LimitOffsetCriteria($request));
        $shops = $this->shopRepository->all();

        return $this->sendResponse($shops->toArray(), 'Shops retrieved successfully');
    }

    /**
     * @param CreateShopAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/shops",
     *      summary="Store a newly created Shop in storage",
     *      tags={"Shop"},
     *      description="Store Shop",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Shop that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Shop")
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/Shop"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateShopAPIRequest $request)
    {
        $input = $request->all();

        $shops = $this->shopRepository->create($input);

        return $this->sendResponse($shops->toArray(), 'Shop saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/shops/{id}",
     *      summary="Display the specified Shop",
     *      tags={"Shop"},
     *      description="Get Shop",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Shop",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/Shop"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function show($id)
    {
        /** @var Shop $shop */
        $shop = $this->shopRepository->find($id);

        if (empty($shop)) {
            return Response::json(ResponseUtil::makeError('Shop not found'), 400);
        }

        return $this->sendResponse($shop->toArray(), 'Shop retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdateShopAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/shops/{id}",
     *      summary="Update the specified Shop in storage",
     *      tags={"Shop"},
     *      description="Update Shop",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Shop",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Shop that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Shop")
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/Shop"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateShopAPIRequest $request)
    {
        $input = $request->all();

        /** @var Shop $shop */
        $shop = $this->shopRepository->find($id);

        if (empty($shop)) {
            return Response::json(ResponseUtil::makeError('Shop not found'), 400);
        }

        $shop = $this->shopRepository->update($input, $id);

        return $this->sendResponse($shop->toArray(), 'Shop updated successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/shops/{id}",
     *      summary="Remove the specified Shop from storage",
     *      tags={"Shop"},
     *      description="Delete Shop",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Shop",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="string"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function destroy($id)
    {
        /** @var Shop $shop */
        $shop = $this->shopRepository->find($id);

        if (empty($shop)) {
            return Response::json(ResponseUtil::makeError('Shop not found'), 400);
        }

        $shop->delete();

        return $this->sendResponse($id, 'Shop deleted successfully');
    }
}
