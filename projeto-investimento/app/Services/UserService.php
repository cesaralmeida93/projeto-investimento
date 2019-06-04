<?php

namespace App\Services;

use Illuminate\Database\QueryException;
use Exception;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Repositories\UserRepository;
use App\Validators\UserValidator;

class UserService
{
	private $repository;
	private $validator;

	public function __construct(UserRepository $repository, UserValidator $validator)
	{
		$this->repository = $repository;
		$this->validator = $validator;
	}

	public function store($data)
	{
		try
		{
            $this->validator->with($data)->passesOrFail(ValidatorInterface::RULE_CREATE);
			$usuario = $this->repository->create($data);

			return [
				'success'  => true,
				'messages' => "Usuário cadastrado",
				'data'	   => $usuario, 
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
	


	
	public function update($data, $id)
	{
		try
		{
            $this->validator->with($data)->passesOrFail(ValidatorInterface::RULE_UPDATE);
			$usuario = $this->repository->update($data, $id);

			return [
				'success'  => true,
				'messages' => "Usuário atualizado",
				'data'	   => $usuario, 
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
	
	public function destroy($user_id)
	{
		try
		{
            $this->repository->delete($user_id);

			return [
				'success'  => true,
				'messages' => "Usuário Removido",
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