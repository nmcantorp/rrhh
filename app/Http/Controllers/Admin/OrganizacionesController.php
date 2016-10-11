<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreateOrganizacionesRequest;
use App\Http\Requests\Admin\UpdateOrganizacionesRequest;
use App\Repositories\Admin\OrganizacionesRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Organizacion;

class OrganizacionesController extends InfyOmBaseController
{
    /** @var  OrganizacionesRepository */
    private $organizacionesRepository;

    public function __construct(OrganizacionesRepository $organizacionesRepo)
    {
        $this->organizacionesRepository = $organizacionesRepo;
    }

    /**
     * Display a listing of the Organizaciones.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $organizaciones = Organizacion::search($request->get('buscar'))->orderBy('nombre_empresa','ASC')->paginate(10);

        return view('admin.organizaciones.index')
            ->with('organizaciones', $organizaciones);
    }

    /**
     * Show the form for creating a new Organizaciones.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.organizaciones.create');
    }

    /**
     * Store a newly created Organizaciones in storage.
     *
     * @param CreateOrganizacionesRequest $request
     *
     * @return Response
     */
    public function store(CreateOrganizacionesRequest $request)
    {
        $input = $request->all();

        $organizaciones = $this->organizacionesRepository->create($input);

        Flash::success('Organizaciones saved successfully.');

        return redirect(route('admin.organizaciones.index'));
    }

    /**
     * Display the specified Organizaciones.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $organizaciones = $this->organizacionesRepository->findWithoutFail($id);

        if (empty($organizaciones)) {
            Flash::error('Organizaciones not found');

            return redirect(route('admin.organizaciones.index'));
        }

        return view('admin.organizaciones.show')->with('organizaciones', $organizaciones);
    }

    /**
     * Show the form for editing the specified Organizaciones.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $organizaciones = $this->organizacionesRepository->findWithoutFail($id);

        if (empty($organizaciones)) {
            Flash::error('Organizaciones not found');

            return redirect(route('admin.organizaciones.index'));
        }

        return view('admin.organizaciones.edit')->with('organizaciones', $organizaciones);
    }

    /**
     * Update the specified Organizaciones in storage.
     *
     * @param  int              $id
     * @param UpdateOrganizacionesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOrganizacionesRequest $request)
    {
        $organizaciones = $this->organizacionesRepository->findWithoutFail($id);

        if (empty($organizaciones)) {
            Flash::error('Organizaciones not found');

            return redirect(route('admin.organizaciones.index'));
        }

        $organizaciones = $this->organizacionesRepository->update($request->all(), $id);

        Flash::success('Organizaciones updated successfully.');

        return redirect(route('admin.organizaciones.index'));
    }

    /**
     * Remove the specified Organizaciones from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $organizaciones = $this->organizacionesRepository->findWithoutFail($id);

        if (empty($organizaciones)) {
            Flash::error('Organizaciones not found');

            return redirect(route('admin.organizaciones.index'));
        }

        $this->organizacionesRepository->delete($id);

        Flash::success('Organizaciones deleted successfully.');

        return redirect(route('admin.organizaciones.index'));
    }
}
