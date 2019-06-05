<?php
namespace App\Services;

use App\Repositories\GroupRepository;
use App\Validators\GroupValidator;
use Prettus\Validator\Contracts\ValidatorInterface;
use Illuminate\Database\QueryException;
use Exception;
use Prettus\Validator\Exceptions\ValidatorException;

class GroupService
{
	private $repository;
	private $validator;

	public function __construct(GroupRepository $repository, GroupValidator $validator)
	{
		$this->repository   = $repository;
		$this->validator    = $validator;
	}

	public function store(array $data) : array
	{
		try
		{
			$this->validator->with($data)->passesOrFail(ValidatorInterface::RULE_CREATE);
			$group = $this->repository->create($data);

			return [
				'success'  => true,
				'messages' => "Grupo criado",
				'data'	   => $group, 
			];
		}		
		catch(Exception $e)
		{
			switch (get_class($e))
			{
				case QueryException::class     	   : return ['success' => false, 'messages' => $e->getMessage()];  
				case ValidatorException::class     : return ['success' => false, 'messages' => $e->getMessageBag()]; 
				case Exception::class     		   : return ['success' => false, 'messages' => $e->getMessage()]; 
				default                            : return ['success' => false, 'messages' => $e->getMessage()]; 
			}

		}
	}

	public function update($group_id, array $data) : array
	{
		try
		{
			$this->validator->with($data)->passesOrFail(ValidatorInterface::RULE_UPDATE);
			$group = $this->repository->update($data, $group_id);

			return [
				'success'  => true,
				'messages' => "Grupo Atualizado",
				'data'	   => $group, 
			];
		}
		catch(Exception $e)
		{
			switch (get_class($e))
			{
				case QueryException::class     	   : return ['success' => false, 'messages' => $e->getMessage()];  
				case ValidatorException::class     : return ['success' => false, 'messages' => $e->getMessageBag()]; 
				case Exception::class     		   : return ['success' => false, 'messages' => $e->getMessage()]; 
				default                            : return ['success' => false, 'messages' => $e->getMessage()]; 
			}
		}
	}


	public function userStore($group_id, $data)
	{
		try
		{
			$group 		= $this->repository->find($group_id);
			$user_id 	= $data['user_id'];

			$group->users()->attach($user_id);
			
			return [
				'success'  => true,
				'messages' => "Usuário relacionado com sucesso!",
				'data'	   => null, 
			];
		}		
		catch(Exception $e)
		{
			switch (get_class($e))
			{
				case QueryException::class     	   : return ['success' => false, 'messages' => $e->getMessage()];  
				case ValidatorException::class     : return ['success' => false, 'messages' => $e->getMessageBag()]; 
				case Exception::class     		   : return ['success' => false, 'messages' => $e->getMessage()]; 
				default                            : return ['success' => false, 'messages' => $e->getMessage()]; 
			}


		}
	}

} 