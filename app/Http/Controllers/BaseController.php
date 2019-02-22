<?php
/**
 * Created by PhpStorm.
 * User: afolabiabass
 * Date: 16/02/2019
 * Time: 12:25 PM
 */

namespace App\Http\Controllers;

use App\Contracts\BaseContract;
use Illuminate\Http\Request;

/**
 * Class Controller
 * @package App\Http\Controllers
 */
abstract class BaseController extends Controller
{

    /**
     * @var BaseContract
     */
    protected $interface;
    /**
     * @var Request
     */
    private $request;

    protected $limit = 10;

    protected $routeIndex = '';
    protected $routeCreate = '';

    protected $viewIndex = '';
    protected $viewCreate = '';
    protected $viewEdit = '';
    protected $viewShow = '';

    protected $with = [];

    /**
     * Create a new controller instance.
     *
     * @param BaseContract $interface
     * @param Request $request
     */
    public function __construct(
        BaseContract $interface,
        Request $request
    )
    {
        $this->interface = $interface;
        $this->request = $request;

        $this->limit = $request->get('limit', 10);
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = $this->interface->pagination($this->limit, $this->request->all());

        return view($this->viewIndex, $this->with)
            ->with('entities', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->viewCreate, $this->with);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|mixed
     */
    public function store(Request $request)
    {
        $entity = $this->interface->create($this->request->except(['_token', '_method']));

        if ($entity) {
            return redirect()->route($this->routeIndex)->with('message', 'Updated Successfully');
        }

        return redirect()->route($this->routeIndex)->with('warning', 'Not Updated');
    }

    /**
     * Display the specified resource.
     *
     * @param int $entityId
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function show($entityId)
    {
        $entity = $this->interface->find($entityId);

        if (!$entity) {
            return redirect()->route($this->routeIndex)->with('warning', 'Not Found');
        }

        return view($this->viewShow, $this->with)
            ->with('entity', $entity);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $entityId
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function edit($entityId)
    {
        $entity = $this->interface->find($entityId);

        if (!$entity) {
            return redirect()->route($this->routeIndex)->with('warning', 'Not Found');
        }

        return view($this->viewEdit, $this->with)
            ->with('entity', $entity);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $entityId
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($entityId, Request $request)
    {
        $entity = $this->interface->find($entityId);

        if ($entity) {
            $updated = $this->interface->update($entityId, $this->request->except(['_token', '_method']));
            if ($updated) {
                return redirect()->route($this->routeIndex)->with('message', 'Updated Successfully');
            }
            return redirect()->route($this->routeIndex)->with('warning', 'Not Updated');
        }

        return redirect()->route($this->routeIndex)->with('warning', 'Not Found');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $entityId
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($entityId)
    {
        $entity = $this->interface->find($entityId);

        if ($entity) {
            if ($this->interface->delete($entityId)) {
                return redirect()->route($this->routeIndex)->with('message', 'Deleted Successfully');
            }
        }

        return redirect()->route($this->routeIndex)->with('warning', 'Not Found');
    }
}
