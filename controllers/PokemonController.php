<?php

namespace app\controllers;

use app\models\Pokemon;
use app\models\PokemonSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * PokemonController implements the CRUD actions for Pokemon model.
 */
class PokemonController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Pokemon models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PokemonSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Pokemon model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Pokemon model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */

     //Función para crear
    public function actionCreate()
    {
        $model = new Pokemon();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Pokemon model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */

    //Función para actualizar
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Pokemon model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */

    //Función para eliminar
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Pokemon model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Pokemon the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Pokemon::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    //Función para adjuntar la imagen subida a la carpeta app/web/uploads
    protected function uploadImage(Pokemon $model)
    {
        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {

                //Subir imagen con UploadedFiledel modelo utilizando 'file'
                $model->file = UploadedFile::getInstance($model, 'file');

                if ($model->validate()) {
                    if ($model->file) {

                        //Esto es para eliminar las imagenes en la carpeta upload
                        if (file_exists($model->image)) {
                            unlink($model->image);
                        }

                        //Validar imagenes con el mismo nombre, agregandole el campo "time" para diferenciarlas y no sobreescribir.
                        //formato: uploads/tiempo_nombreDelArchivo.jpg
                        $filePath = 'uploads/' . time() . "_" . $model->file->baseName . "." . $model->file->extension;

                        //Subir la imagen a la carpeta uploads
                        if ($model->file->saveAs($filePath)) {
                            $model->image = $filePath;
                        }
                    }
                }

                if ($model->save(false)) {
                    return $this->redirect(['index']);
                }
            }
        } else {
            $model->loadDefaultValues();
        }
    }
}
