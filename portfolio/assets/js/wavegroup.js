import {
    Wave
} from './wave.js'

//여러 개의 wave를 만들기 위해 WaveGroup 생성
export class WaveGroup {
    constructor() {
        this.totalWaves = 3;
        this.totalPoints = 6;   //몇 개의 point를 하나의 wave에 그릴 것인지

        this.color = ['rgba(0,199,235,0.4)', 'rgba(0,146,199,0.4)', 'rgba(0,87,158,0.4)'];

        this.waves = [];

        //totalWaves 만큼 Wave 생성
        for (let i = 0; i < this.totalWaves; i++){
            const wave = new Wave(
                i,
                this.totalPoints,
                this.color[i],
            );
            this.waves[i] = wave;
        }
    }

    //WaveGroup 안에 있는 totalWave 만큼 함수 실행
    resize(stageWidth, stageHeight){
        for (let i = 0; i < this.totalWaves; i++){
            const wave = this.waves[i];
            wave.resize(stageWidth, stageHeight);
        }
    }

    draw(ctx){
        for (let i = 0; i < this.totalWaves; i++){
            const wave = this.waves[i];
            wave.draw(ctx);
        }
    }
}