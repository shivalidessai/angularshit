export class Order {
    constructor(
       public name: string,
       public email: string,
       public phone: number,
       public rating: string,
       public recommend: string,
       public sendText: boolean
    ){}
 }